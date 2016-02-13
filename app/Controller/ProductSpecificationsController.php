<?php

App::uses('AppController', 'Controller');

/**
 * ProductSpecifications Controller
 *
 * @property ProductSpecification $ProductSpecification
 * @property PaginatorComponent $Paginator
 */
class ProductSpecificationsController extends AppController {

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
        $this->ProductSpecification->recursive = 0;
        $this->set('productSpecifications', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->ProductSpecification->exists($id)) {
            throw new NotFoundException(__('Invalid product specification'));
        }
        $options = array('conditions' => array('ProductSpecification.' . $this->ProductSpecification->primaryKey => $id));
        $this->set('productSpecification', $this->ProductSpecification->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->ProductSpecification->create();
            if ($this->ProductSpecification->save($this->request->data)) {
                $this->Session->setFlash(__('The product specification has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The product specification could not be saved. Please, try again.'));
            }
        }
        $items = $this->ProductSpecification->Item->find('list');
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
            throw new NotFoundException(__('Invalid product specification'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $date = date('Y-m-d', strtotime($this->request->data['ProductSpecification']['date']));
            $this->request->data['ProductSpecification']['date'] = $date;
            if ($this->ProductSpecification->save($this->request->data)) {
                $this->Session->setFlash(__('The product specification has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'edit', $itemId));
            } else {
                $this->Session->setFlash(__('The product specification could not be saved. Please, try again.'), 'flash_warning');
            }
        } else {
            $products = $this->ProductSpecification->findByItemId($itemId);
            $productSpecId = $products['ProductSpecification']['id'];
            $options = array('conditions' => array('ProductSpecification.' . $this->ProductSpecification->primaryKey => $productSpecId));
            $this->request->data = $this->ProductSpecification->find('first', $options);
            $setdate = date('d-m-Y', strtotime($this->request->data['ProductSpecification']['date']));
            $this->request->data['ProductSpecification']['date'] = $setdate;
        }

        $this->set('itemId', $itemId);
        $this->set('tab', 'product');
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->ProductSpecification->id = $id;
        if (!$this->ProductSpecification->exists()) {
            throw new NotFoundException(__('Invalid product specification'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->ProductSpecification->delete()) {
            $this->Session->setFlash(__('The product specification has been deleted.'));
        } else {
            $this->Session->setFlash(__('The product specification could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
