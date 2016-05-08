<?php

App::uses('AppController', 'Controller');

/**
 * LabelSpecifications Controller
 *
 * @property LabelSpecification $LabelSpecification
 * @property PaginatorComponent $Paginator
 */
class LabelSpecificationsController extends AppController {

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
        $this->LabelSpecification->recursive = 0;
        $this->set('labelSpecifications', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->LabelSpecification->exists($id)) {
            throw new NotFoundException(__('Invalid label specification'));
        }
        $options = array('conditions' => array('LabelSpecification.' . $this->LabelSpecification->primaryKey => $id));
        $this->set('labelSpecification', $this->LabelSpecification->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->LabelSpecification->create();
            if ($this->LabelSpecification->save($this->request->data)) {
                $this->Session->setFlash(__('The label specification has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The label specification could not be saved. Please, try again.'));
            }
        }
        $items = $this->LabelSpecification->Item->find('list');
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
            throw new NotFoundException(__('Invalid label specification'));
        }
        if ($this->request->is(array('post', 'put'))) {
            
            //log//
            $this->loadModel('Log');
            $oldData = $this->LabelSpecification->findById($this->request->data['LabelSpecification']['id']);
            ////////
            
            if ($this->LabelSpecification->save($this->request->data)) {
                
                //log//
                $this->Log->saveLog(array('model' => 'LabelSpecification', 'oldData' => $oldData, 'session' => $this->Session->read('Auth.User')));
                /////////
                
                $this->Session->setFlash(__('The label specification has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'edit', $itemId));
            } else {
                $this->Session->setFlash(__('The label specification could not be saved. Please, try again.'), 'flash_warning');
            }
        } else {
            $label = $this->LabelSpecification->findByItemId($itemId);
            $labelSpecId = $label['LabelSpecification']['id'];
            $options = array('conditions' => array('LabelSpecification.' . $this->LabelSpecification->primaryKey => $labelSpecId));
            $this->request->data = $this->LabelSpecification->find('first', $options);
        }
        $this->set('itemId', $itemId);
        $this->set('tab', 'label');
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->LabelSpecification->id = $id;
        if (!$this->LabelSpecification->exists()) {
            throw new NotFoundException(__('Invalid label specification'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->LabelSpecification->delete()) {
            $this->Session->setFlash(__('The label specification has been deleted.'));
        } else {
            $this->Session->setFlash(__('The label specification could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
