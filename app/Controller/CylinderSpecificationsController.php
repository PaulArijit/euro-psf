<?php

App::uses('AppController', 'Controller');

/**
 * CylinderSpecifications Controller
 *
 * @property CylinderSpecification $CylinderSpecification
 * @property PaginatorComponent $Paginator
 */
class CylinderSpecificationsController extends AppController {

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
        $this->CylinderSpecification->recursive = 0;
        $this->set('cylinderSpecifications', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->CylinderSpecification->exists($id)) {
            throw new NotFoundException(__('Invalid cylinder specification'));
        }
        $options = array('conditions' => array('CylinderSpecification.' . $this->CylinderSpecification->primaryKey => $id));
        $this->set('cylinderSpecification', $this->CylinderSpecification->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->CylinderSpecification->create();
            if ($this->CylinderSpecification->save($this->request->data)) {
                $this->Session->setFlash(__('The cylinder specification has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The cylinder specification could not be saved. Please, try again.'));
            }
        }
        $items = $this->CylinderSpecification->Item->find('list');
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
            throw new NotFoundException(__('Invalid cylinder specification'));
        }
        if ($this->request->is(array('post', 'put'))) {
            
            //log//
            $this->loadModel('Log');
            $oldData = $this->CylinderSpecification->findById($this->request->data['CylinderSpecification']['id']);
            ////////
            
            if ($this->CylinderSpecification->save($this->request->data)) {
                
                //log//
                $this->Log->saveLog(['model' => 'CylinderSpecification', 'oldData' => $oldData, 'session' => $this->Session->read('Auth.User')]);
                /////////
                
                $this->Session->setFlash(__('The cylinder specification has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'edit', $itemId));
            } else {
                $this->Session->setFlash(__('The cylinder specification could not be saved. Please, try again.'), 'flash_warning');
            }
        } else {
            $cylinder = $this->CylinderSpecification->findByItemId($itemId);
            $cylinderSpecId = $cylinder['CylinderSpecification']['id'];
            $options = array('conditions' => array('CylinderSpecification.' . $this->CylinderSpecification->primaryKey => $cylinderSpecId));
            $this->request->data = $this->CylinderSpecification->find('first', $options);
        }
        $this->set('itemId', $itemId);
        $this->set('tab', 'cylinder');
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->CylinderSpecification->id = $id;
        if (!$this->CylinderSpecification->exists()) {
            throw new NotFoundException(__('Invalid cylinder specification'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->CylinderSpecification->delete()) {
            $this->Session->setFlash(__('The cylinder specification has been deleted.'));
        } else {
            $this->Session->setFlash(__('The cylinder specification could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
