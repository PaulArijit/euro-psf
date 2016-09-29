<?php

App::uses('AppController', 'Controller');

/**
 * KnifeBottomSpecifications Controller
 *
 * @property KnifeBottomSpecification $KnifeBottomSpecification
 * @property PaginatorComponent $Paginator
 */
class KnifeBottomSpecificationsController extends AppController {

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
        $this->KnifeBottomSpecification->recursive = 0;
        $this->set('knifeBottomSpecifications', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->KnifeBottomSpecification->exists($id)) {
            throw new NotFoundException(__('Invalid knife bottom specification'));
        }
        $options = array('conditions' => array('KnifeBottomSpecification.' . $this->KnifeBottomSpecification->primaryKey => $id));
        $this->set('knifeBottomSpecification', $this->KnifeBottomSpecification->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->KnifeBottomSpecification->create();
            if ($this->KnifeBottomSpecification->save($this->request->data)) {
                $this->Session->setFlash(__('The knife bottom specification has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The knife bottom specification could not be saved. Please, try again.'));
            }
        }
        $items = $this->KnifeBottomSpecification->Item->find('list');
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
            throw new NotFoundException(__('Invalid knife Bottom specification'));
        }
        if ($this->request->is(array('post', 'put'))) {

            //image upload part
            $uploaddir = '../webroot/img/uploaded/';

            //check image already uploaded or not
            if (!empty($this->request->data['KnifeBottomSpecification']['additional_information']['name'])) {
                move_uploaded_file($this->data['KnifeBottomSpecification']['additional_information']['tmp_name'], $uploaddir . $this->data['KnifeBottomSpecification']['additional_information']['name']);
                $this->request->data['KnifeBottomSpecification']['additional_information'] = $this->request->data['KnifeBottomSpecification']['additional_information']['name'];
            } else {
                unset($this->request->data['KnifeBottomSpecification']['additional_information']);
            }

            //log//
            $this->loadModel('Log');
            $oldData = $this->KnifeBottomSpecification->findById($this->request->data['KnifeBottomSpecification']['id']);
            ////////

            if ($this->KnifeBottomSpecification->save($this->request->data)) {

                //log//
                $this->Log->saveLog(array('model' => 'KnifeBottomSpecification', 'oldData' => $oldData, 'session' => $this->Session->read('Auth.User')));
                /////////

                $this->Session->setFlash(__('The knife Bottom specification has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'edit', $itemId));
            } else {
                $this->Session->setFlash(__('The knife Bottom specification could not be saved. Please, try again.'), 'flash_warning');
            }
        } else {
            $knifeBottom = $this->KnifeBottomSpecification->findByItemId($itemId);
            $knifeBottomSpecId = $knifeBottom['KnifeBottomSpecification']['id'];
            $options = array('conditions' => array('KnifeBottomSpecification.' . $this->KnifeBottomSpecification->primaryKey => $knifeBottomSpecId));
            $this->request->data = $this->KnifeBottomSpecification->find('first', $options);
        }
        $this->set('itemId', $itemId);
        $this->set('tab', 'knife bottom');
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->KnifeBottomSpecification->id = $id;
        if (!$this->KnifeBottomSpecification->exists()) {
            throw new NotFoundException(__('Invalid knife bottom specification'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->KnifeBottomSpecification->delete()) {
            $this->Session->setFlash(__('The knife bottom specification has been deleted.'));
        } else {
            $this->Session->setFlash(__('The knife bottom specification could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
