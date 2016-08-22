<?php

App::uses('AppController', 'Controller');

/**
 * CartonSpecifications Controller
 *
 * @property CartonSpecification $CartonSpecification
 * @property PaginatorComponent $Paginator
 */
class CartonSpecificationsController extends AppController {

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
        $this->CartonSpecification->recursive = 0;
        $this->set('cartonSpecifications', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->CartonSpecification->exists($id)) {
            throw new NotFoundException(__('Invalid carton specification'));
        }
        $options = array('conditions' => array('CartonSpecification.' . $this->CartonSpecification->primaryKey => $id));
        $this->set('cartonSpecification', $this->CartonSpecification->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->CartonSpecification->create();
            if ($this->CartonSpecification->save($this->request->data)) {
                $this->Session->setFlash(__('The carton specification has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The carton specification could not be saved. Please, try again.'));
            }
        }
        $items = $this->CartonSpecification->Item->find('list');
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
            throw new NotFoundException(__('Invalid carton specification'));
        }
        if ($this->request->is(array('post', 'put'))) {
            
            //image upload part
            $uploaddir = '../webroot/img/uploaded/';

            //check image already uploaded or not
            if (!empty($this->request->data['CartonSpecification']['additional_information']['name'])) {
                move_uploaded_file($this->data['CartonSpecification']['additional_information']['tmp_name'], $uploaddir . $this->data['CartonSpecification']['additional_information']['name']);
                $this->request->data['CartonSpecification']['additional_information'] = $this->request->data['CartonSpecification']['additional_information']['name'];
            } else {
                unset($this->request->data['CartonSpecification']['additional_information']);
            }
            
            //log//
            $this->loadModel('Log');
            $oldData = $this->CartonSpecification->findById($this->request->data['CartonSpecification']['id']);
            ////////
            
            if ($this->CartonSpecification->save($this->request->data)) {
                
                //log//
                $this->Log->saveLog(array('model' => 'CartonSpecification', 'oldData' => $oldData, 'session' => $this->Session->read('Auth.User')));
                /////////
                
                $this->Session->setFlash(__('The carton specification has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'edit', $itemId));
            } else {
                $this->Session->setFlash(__('The carton specification could not be saved. Please, try again.'), 'flash_warning');
            }
        } else {
            $cartons = $this->CartonSpecification->findByItemId($itemId);
            $cartonSpecId = $cartons['CartonSpecification']['id'];
            $options = array('conditions' => array('CartonSpecification.' . $this->CartonSpecification->primaryKey => $cartonSpecId));
            $this->request->data = $this->CartonSpecification->find('first', $options);
        }
        $this->set('itemId', $itemId);
        $this->set('tab', 'carton');
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->CartonSpecification->id = $id;
        if (!$this->CartonSpecification->exists()) {
            throw new NotFoundException(__('Invalid carton specification'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->CartonSpecification->delete()) {
            $this->Session->setFlash(__('The carton specification has been deleted.'), 'flash_danger');
        } else {
            $this->Session->setFlash(__('The carton specification could not be deleted. Please, try again.'), 'flash_warning');
        }
        return $this->redirect(array('action' => 'index'));
    }

}
