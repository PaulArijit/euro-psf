<?php

App::uses('AppController', 'Controller');

/**
 * DispenserSpecifications Controller
 *
 * @property DispenserSpecification $DispenserSpecification
 * @property PaginatorComponent $Paginator
 */
class DispenserSpecificationsController extends AppController {

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
        $this->DispenserSpecification->recursive = 0;
        $this->set('dispenserSpecifications', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->DispenserSpecification->exists($id)) {
            throw new NotFoundException(__('Invalid dispenser specification'));
        }
        $options = array('conditions' => array('DispenserSpecification.' . $this->DispenserSpecification->primaryKey => $id));
        $this->set('dispenserSpecification', $this->DispenserSpecification->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->DispenserSpecification->create();
            if ($this->DispenserSpecification->save($this->request->data)) {
                $this->Session->setFlash(__('The dispenser specification has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The dispenser specification could not be saved. Please, try again.'));
            }
        }
        $items = $this->DispenserSpecification->Item->find('list');
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
            throw new NotFoundException(__('Invalid Diapenser specification'));
        }
        if ($this->request->is(array('post', 'put'))) {

            //image upload part
            $uploaddir = '../webroot/img/uploaded/';

            //check image already uploaded or not
            if (!empty($this->request->data['DispenserSpecification']['additional_information']['name'])) {
                move_uploaded_file($this->data['DispenserSpecification']['additional_information']['tmp_name'], $uploaddir . $this->data['DispenserSpecification']['additional_information']['name']);
                $this->request->data['DispenserSpecification']['additional_information'] = $this->request->data['DispenserSpecification']['additional_information']['name'];
            } else {
                unset($this->request->data['DispenserSpecification']['additional_information']);
            }

            //log//
            $this->loadModel('Log');
            $oldData = $this->DispenserSpecification->findById($this->request->data['DispenserSpecification']['id']);
            ////////

            if ($this->DispenserSpecification->save($this->request->data)) {

                //log//
                $this->Log->saveLog(array('model' => 'DispenserSpecification', 'oldData' => $oldData, 'session' => $this->Session->read('Auth.User')));
                /////////

                $this->Session->setFlash(__('The Dispenser specification has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'edit', $itemId));
            } else {
                $this->Session->setFlash(__('The Dispenser specification could not be saved. Please, try again.'), 'flash_warning');
            }
        } else {
            $dispensers = $this->DispenserSpecification->findByItemId($itemId);
            $dispenserSpecId = $dispensers['DispenserSpecification']['id'];
            $options = array('conditions' => array('DispenserSpecification.' . $this->DispenserSpecification->primaryKey => $dispenserSpecId));
            $this->request->data = $this->DispenserSpecification->find('first', $options);
        }
        $this->set('itemId', $itemId);
        $this->set('tab', 'dispenser');
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->DispenserSpecification->id = $id;
        if (!$this->DispenserSpecification->exists()) {
            throw new NotFoundException(__('Invalid dispenser specification'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->DispenserSpecification->delete()) {
            $this->Session->setFlash(__('The dispenser specification has been deleted.'));
        } else {
            $this->Session->setFlash(__('The dispenser specification could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
