<?php

App::uses('AppController', 'Controller');

/**
 * KnifeTopSpecifications Controller
 *
 * @property KnifeTopSpecification $KnifeTopSpecification
 * @property PaginatorComponent $Paginator
 */
class KnifeTopSpecificationsController extends AppController {

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
        $this->KnifeTopSpecification->recursive = 0;
        $this->set('knifeTopSpecifications', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->KnifeTopSpecification->exists($id)) {
            throw new NotFoundException(__('Invalid knife top specification'));
        }
        $options = array('conditions' => array('KnifeTopSpecification.' . $this->KnifeTopSpecification->primaryKey => $id));
        $this->set('knifeTopSpecification', $this->KnifeTopSpecification->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->KnifeTopSpecification->create();
            if ($this->KnifeTopSpecification->save($this->request->data)) {
                $this->Session->setFlash(__('The knife top specification has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The knife top specification could not be saved. Please, try again.'));
            }
        }
        $items = $this->KnifeTopSpecification->Item->find('list');
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
            throw new NotFoundException(__('Invalid knife Top specification'));
        }
        if ($this->request->is(array('post', 'put'))) {

            //image upload part
            $uploaddir = '../webroot/img/uploaded/';

            //check image already uploaded or not
            if (!empty($this->request->data['KnifeTopSpecification']['additional_information']['name'])) {
                move_uploaded_file($this->data['KnifeTopSpecification']['additional_information']['tmp_name'], $uploaddir . $this->data['KnifeTopSpecification']['additional_information']['name']);
                $this->request->data['KnifeTopSpecification']['additional_information'] = $this->request->data['KnifeTopSpecification']['additional_information']['name'];
            } else {
                unset($this->request->data['KnifeTopSpecification']['additional_information']);
            }

            //log//
            $this->loadModel('Log');
            $oldData = $this->KnifeTopSpecification->findById($this->request->data['KnifeTopSpecification']['id']);
            ////////

            if ($this->KnifeTopSpecification->save($this->request->data)) {

                //log//
                $this->Log->saveLog(array('model' => 'KnifeTopSpecification', 'oldData' => $oldData, 'session' => $this->Session->read('Auth.User')));
                /////////

                $this->Session->setFlash(__('The knife Top specification has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'edit', $itemId));
            } else {
                $this->Session->setFlash(__('The knife Top specification could not be saved. Please, try again.'), 'flash_warning');
            }
        } else {
            $knifeTop = $this->KnifeTopSpecification->findByItemId($itemId);
            $knifeTopSpecId = $knifeTop['KnifeTopSpecification']['id'];
            $options = array('conditions' => array('KnifeTopSpecification.' . $this->KnifeTopSpecification->primaryKey => $knifeTopSpecId));
            $this->request->data = $this->KnifeTopSpecification->find('first', $options);
        }
        $this->set('itemId', $itemId);
        $this->set('tab', 'knife top');
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->KnifeTopSpecification->id = $id;
        if (!$this->KnifeTopSpecification->exists()) {
            throw new NotFoundException(__('Invalid knife top specification'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->KnifeTopSpecification->delete()) {
            $this->Session->setFlash(__('The knife top specification has been deleted.'));
        } else {
            $this->Session->setFlash(__('The knife top specification could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
