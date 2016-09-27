<?php

App::uses('AppController', 'Controller');

/**
 * LayerPadSpecifications Controller
 *
 * @property LayerPadSpecification $LayerPadSpecification
 * @property PaginatorComponent $Paginator
 */
class LayerPadSpecificationsController extends AppController {

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
        $this->LayerPadSpecification->recursive = 0;
        $this->set('layerPadSpecifications', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->LayerPadSpecification->exists($id)) {
            throw new NotFoundException(__('Invalid layer pad specification'));
        }
        $options = array('conditions' => array('LayerPadSpecification.' . $this->LayerPadSpecification->primaryKey => $id));
        $this->set('layerPadSpecification', $this->LayerPadSpecification->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->LayerPadSpecification->create();
            if ($this->LayerPadSpecification->save($this->request->data)) {
                $this->Session->setFlash(__('The layer pad specification has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The layer pad specification could not be saved. Please, try again.'));
            }
        }
        $items = $this->LayerPadSpecification->Item->find('list');
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
            throw new NotFoundException(__('Invalid Layer Pad specification'));
        }
        if ($this->request->is(array('post', 'put'))) {

            //image upload part
            $uploaddir = '../webroot/img/uploaded/';

            //check image already uploaded or not
            if (!empty($this->request->data['LayerPadSpecification']['additional_information']['name'])) {
                move_uploaded_file($this->data['LayerPadSpecification']['additional_information']['tmp_name'], $uploaddir . $this->data['LayerPadSpecification']['additional_information']['name']);
                $this->request->data['LayerPadSpecification']['additional_information'] = $this->request->data['LayerPadSpecification']['additional_information']['name'];
            } else {
                unset($this->request->data['LayerPadSpecification']['additional_information']);
            }

            //log//
            $this->loadModel('Log');
            $oldData = $this->LayerPadSpecificationn->findById($this->request->data['LayerPadSpecification']['id']);
            ////////

            if ($this->LayerPadSpecification->save($this->request->data)) {

                //log//
                $this->Log->saveLog(array('model' => 'LayerPadSpecification', 'oldData' => $oldData, 'session' => $this->Session->read('Auth.User')));
                /////////

                $this->Session->setFlash(__('The Layer Pad specification has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'edit', $itemId));
            } else {
                $this->Session->setFlash(__('The Layer Pad specification could not be saved. Please, try again.'), 'flash_warning');
            }
        } else {
            $layerPad = $this->LayerPadSpecification->findByItemId($itemId);
            $layerPadSpecId = $layerPad['LayerPadSpecification']['id'];
            $options = array('conditions' => array('LayerPadSpecification.' . $this->LayerPadSpecification->primaryKey => $layerPadSpecId));
            $this->request->data = $this->LayerPadSpecification->find('first', $options);
        }
        $this->set('itemId', $itemId);
        $this->set('tab', 'layer pad');
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->LayerPadSpecification->id = $id;
        if (!$this->LayerPadSpecification->exists()) {
            throw new NotFoundException(__('Invalid layer pad specification'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->LayerPadSpecification->delete()) {
            $this->Session->setFlash(__('The layer pad specification has been deleted.'));
        } else {
            $this->Session->setFlash(__('The layer pad specification could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
