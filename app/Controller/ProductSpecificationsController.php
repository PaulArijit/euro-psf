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
	public function edit($id = null) {
		if (!$this->ProductSpecification->exists($id)) {
			throw new NotFoundException(__('Invalid product specification'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProductSpecification->save($this->request->data)) {
				$this->Session->setFlash(__('The product specification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product specification could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductSpecification.' . $this->ProductSpecification->primaryKey => $id));
			$this->request->data = $this->ProductSpecification->find('first', $options);
		}
		$items = $this->ProductSpecification->Item->find('list');
		$this->set(compact('items'));
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
