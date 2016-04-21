<?php

App::uses('AppController', 'Controller');

/**
 * KnifeSpecifications Controller
 *
 * @property KnifeSpecification $KnifeSpecification
 * @property PaginatorComponent $Paginator
 */
class KnifeSpecificationsController extends AppController {

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
        $this->KnifeSpecification->recursive = 0;
        $this->set('knifeSpecifications', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->KnifeSpecification->exists($id)) {
            throw new NotFoundException(__('Invalid knife specification'));
        }
        $options = array('conditions' => array('KnifeSpecification.' . $this->KnifeSpecification->primaryKey => $id));
        $this->set('knifeSpecification', $this->KnifeSpecification->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->KnifeSpecification->create();
            if ($this->KnifeSpecification->save($this->request->data)) {
                $this->Session->setFlash(__('The knife specification has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The knife specification could not be saved. Please, try again.'));
            }
        }
        $items = $this->KnifeSpecification->Item->find('list');
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
            throw new NotFoundException(__('Invalid knife specification'));
        }
        if ($this->request->is(array('post', 'put'))) {
            
            //log//
            $this->loadModel('Log');
            $oldData = $this->KnifeSpecification->findById($this->request->data['KnifeSpecification']['id']);
            ////////
            
            if ($this->KnifeSpecification->save($this->request->data)) {
                
                //log//
                $this->Log->saveLog(['model' => 'KnifeSpecification', 'oldData' => $oldData, 'session' => $this->Session->read('Auth.User')]);
                /////////
                
                $this->Session->setFlash(__('The knife specification has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'edit', $itemId));
            } else {
                $this->Session->setFlash(__('The knife specification could not be saved. Please, try again.'), 'flash_warning');
            }
        } else {
            $knife = $this->KnifeSpecification->findByItemId($itemId);
            $knifeSpecId = $knife['KnifeSpecification']['id'];
            $options = array('conditions' => array('KnifeSpecification.' . $this->KnifeSpecification->primaryKey => $knifeSpecId));
            $this->request->data = $this->KnifeSpecification->find('first', $options);
        }
        $this->set('itemId', $itemId);
        $this->set('tab', 'knife');
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->KnifeSpecification->id = $id;
        if (!$this->KnifeSpecification->exists()) {
            throw new NotFoundException(__('Invalid knife specification'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->KnifeSpecification->delete()) {
            $this->Session->setFlash(__('The knife specification has been deleted.'));
        } else {
            $this->Session->setFlash(__('The knife specification could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
