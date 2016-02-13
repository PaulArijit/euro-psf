<?php

App::uses('AppController', 'Controller');

/**
 * QfExtFirstOffDetails Controller
 *
 * @property QfExtFirstOffDetail $QfExtFirstOffDetail
 * @property PaginatorComponent $Paginator
 */
class QfExtFirstOffDetailsController extends AppController {

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
        $this->QfExtFirstOffDetail->recursive = 0;
        $this->set('qfExtFirstOffDetails', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->QfExtFirstOffDetail->exists($id)) {
            throw new NotFoundException(__('Invalid qf ext first off detail'));
        }
        $options = array('conditions' => array('QfExtFirstOffDetail.' . $this->QfExtFirstOffDetail->primaryKey => $id));
        $this->set('qfExtFirstOffDetail', $this->QfExtFirstOffDetail->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->QfExtFirstOffDetail->create();
            if ($this->QfExtFirstOffDetail->save($this->request->data)) {
                $this->Session->setFlash(__('The qf ext first off detail has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The qf ext first off detail could not be saved. Please, try again.'));
            }
        }
        $items = $this->QfExtFirstOffDetail->Item->find('list');
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
            throw new NotFoundException(__('Invalid qf ext first off detail'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->QfExtFirstOffDetail->save($this->request->data)) {
                $this->Session->setFlash(__('The qf ext first off detail has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'edit', $itemId));
            } else {
                $this->Session->setFlash(__('The qf ext first off detail could not be saved. Please, try again.'), 'flash_warning');
            }
        } else {
            $extFirstOff = $this->QfExtFirstOffDetail->findByItemId($itemId);
            $extFirstOffSpecId = $extFirstOff['QfExtFirstOffDetail']['id'];
            $options = array('conditions' => array('QfExtFirstOffDetail.' . $this->QfExtFirstOffDetail->primaryKey => $extFirstOffSpecId));
            $this->request->data = $this->QfExtFirstOffDetail->find('first', $options);
        }
        $this->set('itemId', $itemId);
        $this->set('tab', 'qf two');
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->QfExtFirstOffDetail->id = $id;
        if (!$this->QfExtFirstOffDetail->exists()) {
            throw new NotFoundException(__('Invalid qf ext first off detail'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->QfExtFirstOffDetail->delete()) {
            $this->Session->setFlash(__('The qf ext first off detail has been deleted.'));
        } else {
            $this->Session->setFlash(__('The qf ext first off detail could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
