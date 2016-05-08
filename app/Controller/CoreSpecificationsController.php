<?php

App::uses('AppController', 'Controller');

/**
 * CoreSpecifications Controller
 *
 * @property CoreSpecification $CoreSpecification
 * @property PaginatorComponent $Paginator
 */
class CoreSpecificationsController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->CoreSpecification->recursive = 0;
        $this->set('coreSpecifications', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->CoreSpecification->exists($id)) {
            throw new NotFoundException(__('Invalid core specification'));
        }
        $options = array('conditions' => array('CoreSpecification.' . $this->CoreSpecification->primaryKey => $id));
        $this->set('coreSpecification', $this->CoreSpecification->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->CoreSpecification->create();
            if ($this->CoreSpecification->save($this->request->data)) {
                $this->Session->setFlash(__('The core specification has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The core specification could not be saved. Please, try again.'));
            }
        }
        $items = $this->CoreSpecification->Item->find('list');
        $this->set(compact('items'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($itemId = null) {
        $this->loadModel('Item');
        if (!$this->Item->exists($itemId)) {
            throw new NotFoundException(__('Invalid core specification'));
        }
        if ($this->request->is(array('post', 'put'))) {
            
            //log//
            $this->loadModel('Log');
            $oldData = $this->CoreSpecification->findById($this->request->data['CoreSpecification']['id']);
            ////////
            
            if ($this->CoreSpecification->save($this->request->data)) {
                
                //log//
                $this->Log->saveLog(array('model' => 'CoreSpecification', 'oldData' => $oldData, 'session' => $this->Session->read('Auth.User')));
                /////////
                
                $this->Session->setFlash(__('The core specification has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'edit', $itemId));
            } else {
                $this->Session->setFlash(__('The core specification could not be saved. Please, try again.'), 'flash_warning');
            }
        } else {
            $core = $this->CoreSpecification->findByItemId($itemId);
            $coreSpecId = $core['CoreSpecification']['id'];
            $options = array('conditions' => array('CoreSpecification.' . $this->CoreSpecification->primaryKey => $coreSpecId));
            $this->request->data = $this->CoreSpecification->find('first', $options);
        }
        $this->set('itemId', $itemId);
        $this->set('tab', 'core');
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->CoreSpecification->id = $id;
        if (!$this->CoreSpecification->exists()) {
            throw new NotFoundException(__('Invalid core specification'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->CoreSpecification->delete()) {
            $this->Session->setFlash(__('The core specification has been deleted.'));
        } else {
            $this->Session->setFlash(__('The core specification could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
