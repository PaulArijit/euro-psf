<?php

App::uses('AppController', 'Controller');

/**
 * QfOuterFirstOffDetails Controller
 *
 * @property QfOuterFirstOffDetail $QfOuterFirstOffDetail
 * @property PaginatorComponent $Paginator
 */
class QfOuterFirstOffDetailsController extends AppController {

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
        $this->QfOuterFirstOffDetail->recursive = 0;
        $this->set('qfOuterFirstOffDetails', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->QfOuterFirstOffDetail->exists($id)) {
            throw new NotFoundException(__('Invalid qf outer first off detail'));
        }
        $options = array('conditions' => array('QfOuterFirstOffDetail.' . $this->QfOuterFirstOffDetail->primaryKey => $id));
        $this->set('qfOuterFirstOffDetail', $this->QfOuterFirstOffDetail->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->QfOuterFirstOffDetail->create();
            if ($this->QfOuterFirstOffDetail->save($this->request->data)) {
                $this->Session->setFlash(__('The qf outer first off detail has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The qf outer first off detail could not be saved. Please, try again.'));
            }
        }
        $items = $this->QfOuterFirstOffDetail->Item->find('list');
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
            throw new NotFoundException(__('Invalid qf Outer first off detail'));
        }
        if ($this->request->is(array('post', 'put'))) {
            //image upload part
            $uploaddir = '../webroot/img/uploaded/';

            //check image already uploaded or not
            if (!empty($this->request->data['QfOuterFirstOffDetail']['artwork_detail']['name'])) {
                move_uploaded_file($this->data['QfOuterFirstOffDetail']['artwork_detail']['tmp_name'], $uploaddir . $this->data['QfOuterFirstOffDetail']['artwork_detail']['name']);
                $this->request->data['QfOuterFirstOffDetail']['artwork_detail'] = $this->request->data['QfOuterFirstOffDetail']['artwork_detail']['name'];
            } else {
                unset($this->request->data['QfOuterFirstOffDetail']['artwork_detail']);
            }
            if (!empty($this->request->data['QfOuterFirstOffDetail']['sample_bag_attachment']['name'])) {
                move_uploaded_file($this->data['QfOuterFirstOffDetail']['sample_bag_attachment']['tmp_name'], $uploaddir . $this->data['QfOuterFirstOffDetail']['sample_bag_attachment']['name']);
                $this->request->data['QfOuterFirstOffDetail']['sample_bag_attachment'] = $this->request->data['QfOuterFirstOffDetail']['sample_bag_attachment']['name'];
            } else {
                unset($this->request->data['QfOuterFirstOffDetail']['sample_bag_attachment']);
            }

            //log//
            $this->loadModel('Log');
            $oldData = $this->QfOuterFirstOffDetail->findById($this->request->data['QfOuterFirstOffDetail']['id']);
            ////////

            if ($this->QfOuterFirstOffDetail->save($this->request->data)) {

                //log//
                $this->Log->saveLog(array('model' => 'QfOuterFirstOffDetail', 'oldData' => $oldData, 'session' => $this->Session->read('Auth.User')));
                /////////

                $this->Session->setFlash(__('The qf ext first off detail has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'edit', $itemId));
            } else {
                $this->Session->setFlash(__('The qf ext first off detail could not be saved. Please, try again.'), 'flash_warning');
            }
        } else {
            $outerFirstOff = $this->QfOuterFirstOffDetail->findByItemId($itemId);
            $outerFirstOffSpecId = $outerFirstOff['QfOuterFirstOffDetail']['id'];
            $options = array('conditions' => array('QfOuterFirstOffDetail.' . $this->QfOuterFirstOffDetail->primaryKey => $outerFirstOffSpecId));
            $this->request->data = $this->QfOuterFirstOffDetail->find('first', $options);
        }
        $this->set('itemId', $itemId);
        $this->set('tab', 'ofo');
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->QfOuterFirstOffDetail->id = $id;
        if (!$this->QfOuterFirstOffDetail->exists()) {
            throw new NotFoundException(__('Invalid qf outer first off detail'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->QfOuterFirstOffDetail->delete()) {
            $this->Session->setFlash(__('The qf outer first off detail has been deleted.'));
        } else {
            $this->Session->setFlash(__('The qf outer first off detail could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
