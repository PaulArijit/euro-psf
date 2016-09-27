<?php

App::uses('AppController', 'Controller');

/**
 * CartonBottomSpecifications Controller
 *
 * @property CartonBottomSpecification $CartonBottomSpecification
 * @property PaginatorComponent $Paginator
 */
class CartonBottomSpecificationsController extends AppController {

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
        $this->CartonBottomSpecification->recursive = 0;
        $this->set('cartonBottomSpecifications', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->CartonBottomSpecification->exists($id)) {
            throw new NotFoundException(__('Invalid carton bottom specification'));
        }
        $options = array('conditions' => array('CartonBottomSpecification.' . $this->CartonBottomSpecification->primaryKey => $id));
        $this->set('cartonBottomSpecification', $this->CartonBottomSpecification->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->CartonBottomSpecification->create();
            if ($this->CartonBottomSpecification->save($this->request->data)) {
                $this->Session->setFlash(__('The carton bottom specification has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The carton bottom specification could not be saved. Please, try again.'));
            }
        }
        $items = $this->CartonBottomSpecification->Item->find('list');
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
            throw new NotFoundException(__('Invalid carton Bottom specification'));
        }
        if ($this->request->is(array('post', 'put'))) {
            
            //image upload part
            $uploaddir = '../webroot/img/uploaded/';

            //check image already uploaded or not
            if (!empty($this->request->data['CartonBottomSpecification']['additional_information']['name'])) {
                move_uploaded_file($this->data['CartonBottomSpecification']['additional_information']['tmp_name'], $uploaddir . $this->data['CartonBottomSpecification']['additional_information']['name']);
                $this->request->data['CartonBottomSpecification']['additional_information'] = $this->request->data['CartonBottomSpecification']['additional_information']['name'];
            } else {
                unset($this->request->data['CartonBottomSpecification']['additional_information']);
            }
            
            //log//
            $this->loadModel('Log');
            $oldData = $this->CartonBottomSpecification->findById($this->request->data['CartonBottomSpecification']['id']);
            ////////
            
            if ($this->CartonBottomSpecification->save($this->request->data)) {
                
                //log//
                $this->Log->saveLog(array('model' => 'CartonBottomSpecification', 'oldData' => $oldData, 'session' => $this->Session->read('Auth.User')));
                /////////
                
                $this->Session->setFlash(__('The carton Bottom specification has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'edit', $itemId));
            } else {
                $this->Session->setFlash(__('The carton Bottom specification could not be saved. Please, try again.'), 'flash_warning');
            }
        } else {
            $cartonsBottom = $this->CartonBottomSpecification->findByItemId($itemId);
            $cartonBottomSpecId = $cartonsBottom['CartonBottomSpecification']['id'];
            $options = array('conditions' => array('CartonBottomSpecification.' . $this->CartonBottomSpecification->primaryKey => $cartonBottomSpecId));
            $this->request->data = $this->CartonBottomSpecification->find('first', $options);
        }
        $this->set('itemId', $itemId);
        $this->set('tab', 'carton bottom');
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->CartonBottomSpecification->id = $id;
        if (!$this->CartonBottomSpecification->exists()) {
            throw new NotFoundException(__('Invalid carton bottom specification'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->CartonBottomSpecification->delete()) {
            $this->Session->setFlash(__('The carton bottom specification has been deleted.'));
        } else {
            $this->Session->setFlash(__('The carton bottom specification could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
