<?php

App::uses('AppController', 'Controller');

/**
 * GrommetSpecifications Controller
 *
 * @property GrommetSpecification $GrommetSpecification
 * @property PaginatorComponent $Paginator
 */
class GrommetSpecificationsController extends AppController {

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
        $this->GrommetSpecification->recursive = 0;
        $this->set('grommetSpecifications', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->GrommetSpecification->exists($id)) {
            throw new NotFoundException(__('Invalid grommet specification'));
        }
        $options = array('conditions' => array('GrommetSpecification.' . $this->GrommetSpecification->primaryKey => $id));
        $this->set('grommetSpecification', $this->GrommetSpecification->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->GrommetSpecification->create();
            if ($this->GrommetSpecification->save($this->request->data)) {
                $this->Session->setFlash(__('The grommet specification has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The grommet specification could not be saved. Please, try again.'));
            }
        }
        $items = $this->GrommetSpecification->Item->find('list');
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
            throw new NotFoundException(__('Invalid grommet specification'));
        }
        if ($this->request->is(array('post', 'put'))) {
            
            //log//
            $this->loadModel('Log');
            $oldData = $this->GrommetSpecification->findById($this->request->data['GrommetSpecification']['id']);
            ////////
            
            if ($this->GrommetSpecification->save($this->request->data)) {
                
                //log//
                $this->Log->saveLog(['model' => 'GrommetSpecification', 'oldData' => $oldData, 'session' => $this->Session->read('Auth.User')]);
                /////////
                
                $this->Session->setFlash(__('The grommet specification has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'edit', $itemId));
            } else {
                $this->Session->setFlash(__('The grommet specification could not be saved. Please, try again.'), 'flash_warning');
            }
        } else {
            $grommet = $this->GrommetSpecification->findByItemId($itemId);
            $grommetSpecId = $grommet['GrommetSpecification']['id'];
            $options = array('conditions' => array('GrommetSpecification.' . $this->GrommetSpecification->primaryKey => $grommetSpecId));
            $this->request->data = $this->GrommetSpecification->find('first', $options);
        }
        $this->set('itemId', $itemId);
        $this->set('tab', 'grommet');
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->GrommetSpecification->id = $id;
        if (!$this->GrommetSpecification->exists()) {
            throw new NotFoundException(__('Invalid grommet specification'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->GrommetSpecification->delete()) {
            $this->Session->setFlash(__('The grommet specification has been deleted.'));
        } else {
            $this->Session->setFlash(__('The grommet specification could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
