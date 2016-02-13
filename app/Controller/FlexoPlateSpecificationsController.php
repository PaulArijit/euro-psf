<?php

App::uses('AppController', 'Controller');

/**
 * FlexoPlateSpecifications Controller
 *
 * @property FlexoPlateSpecification $FlexoPlateSpecification
 * @property PaginatorComponent $Paginator
 */
class FlexoPlateSpecificationsController extends AppController {

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
        $this->FlexoPlateSpecification->recursive = 0;
        $this->set('flexoPlateSpecifications', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->FlexoPlateSpecification->exists($id)) {
            throw new NotFoundException(__('Invalid flexo plate specification'));
        }
        $options = array('conditions' => array('FlexoPlateSpecification.' . $this->FlexoPlateSpecification->primaryKey => $id));
        $this->set('flexoPlateSpecification', $this->FlexoPlateSpecification->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->FlexoPlateSpecification->create();
            if ($this->FlexoPlateSpecification->save($this->request->data)) {
                $this->Session->setFlash(__('The flexo plate specification has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The flexo plate specification could not be saved. Please, try again.'));
            }
        }
        $items = $this->FlexoPlateSpecification->Item->find('list');
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
            throw new NotFoundException(__('Invalid flexo plate specification'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->FlexoPlateSpecification->save($this->request->data)) {
                $this->Session->setFlash(__('The flexo plate specification has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'edit', $itemId));
            } else {
                $this->Session->setFlash(__('The flexo plate specification could not be saved. Please, try again.'), 'flash_warning');
            }
        } else {
            $flexoplate = $this->FlexoPlateSpecification->findByItemId($itemId);
            $flexoplateSpecId = $flexoplate['FlexoPlateSpecification']['id'];
            $options = array('conditions' => array('FlexoPlateSpecification.' . $this->FlexoPlateSpecification->primaryKey => $flexoplateSpecId));
            $this->request->data = $this->FlexoPlateSpecification->find('first', $options);
        }
        $this->set('itemId', $itemId);
        $this->set('tab', 'flexo plate');
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->FlexoPlateSpecification->id = $id;
        if (!$this->FlexoPlateSpecification->exists()) {
            throw new NotFoundException(__('Invalid flexo plate specification'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->FlexoPlateSpecification->delete()) {
            $this->Session->setFlash(__('The flexo plate specification has been deleted.'));
        } else {
            $this->Session->setFlash(__('The flexo plate specification could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
