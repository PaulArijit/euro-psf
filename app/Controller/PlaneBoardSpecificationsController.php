<?php

App::uses('AppController', 'Controller');

/**
 * PlaneBoardSpecifications Controller
 *
 * @property PlaneBoardSpecification $PlaneBoardSpecification
 * @property PaginatorComponent $Paginator
 */
class PlaneBoardSpecificationsController extends AppController {

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
        $this->PlaneBoardSpecification->recursive = 0;
        $this->set('planeBoardSpecifications', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->PlaneBoardSpecification->exists($id)) {
            throw new NotFoundException(__('Invalid plane board specification'));
        }
        $options = array('conditions' => array('PlaneBoardSpecification.' . $this->PlaneBoardSpecification->primaryKey => $id));
        $this->set('planeBoardSpecification', $this->PlaneBoardSpecification->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->PlaneBoardSpecification->create();
            if ($this->PlaneBoardSpecification->save($this->request->data)) {
                $this->Session->setFlash(__('The plane board specification has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The plane board specification could not be saved. Please, try again.'));
            }
        }
        $items = $this->PlaneBoardSpecification->Item->find('list');
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
            throw new NotFoundException(__('Invalid Plane Board specification'));
        }
        if ($this->request->is(array('post', 'put'))) {

            //image upload part
            $uploaddir = '../webroot/img/uploaded/';

            //check image already uploaded or not
            if (!empty($this->request->data['PlaneBoardSpecification']['additional_information']['name'])) {
                move_uploaded_file($this->data['PlaneBoardSpecification']['additional_information']['tmp_name'], $uploaddir . $this->data['PlaneBoardSpecification']['additional_information']['name']);
                $this->request->data['PlaneBoardSpecification']['additional_information'] = $this->request->data['PlaneBoardSpecification']['additional_information']['name'];
            } else {
                unset($this->request->data['PlaneBoardSpecification']['additional_information']);
            }

            //log//
            $this->loadModel('Log');
            $oldData = $this->PlaneBoardSpecification->findById($this->request->data['PlaneBoardSpecification']['id']);
            ////////

            if ($this->PlaneBoardSpecification->save($this->request->data)) {

                //log//
                $this->Log->saveLog(array('model' => 'PlaneBoardSpecification', 'oldData' => $oldData, 'session' => $this->Session->read('Auth.User')));
                /////////

                $this->Session->setFlash(__('The Plane Board specification has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'edit', $itemId));
            } else {
                $this->Session->setFlash(__('The Plane Board specification could not be saved. Please, try again.'), 'flash_warning');
            }
        } else {
            $planeBoard = $this->PlaneBoardSpecification->findByItemId($itemId);
            $planeBoardSpecId = $planeBoard['PlaneBoardSpecification']['id'];
            $options = array('conditions' => array('PlaneBoardSpecification.' . $this->PlaneBoardSpecification->primaryKey => $planeBoardSpecId));
            $this->request->data = $this->PlaneBoardSpecification->find('first', $options);
        }
        $this->set('itemId', $itemId);
        $this->set('tab', 'plane board');
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->PlaneBoardSpecification->id = $id;
        if (!$this->PlaneBoardSpecification->exists()) {
            throw new NotFoundException(__('Invalid plane board specification'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->PlaneBoardSpecification->delete()) {
            $this->Session->setFlash(__('The plane board specification has been deleted.'));
        } else {
            $this->Session->setFlash(__('The plane board specification could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
