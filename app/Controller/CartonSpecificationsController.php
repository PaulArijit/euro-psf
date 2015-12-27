<?php
App::uses('AppController', 'Controller');
/**
 * CartonSpecifications Controller
 *
 * @property CartonSpecification $CartonSpecification
 * @property PaginatorComponent $Paginator
 */
class CartonSpecificationsController extends AppController {

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
		$this->CartonSpecification->recursive = 0;
		$this->set('cartonSpecifications', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CartonSpecification->exists($id)) {
			throw new NotFoundException(__('Invalid carton specification'));
		}
		$options = array('conditions' => array('CartonSpecification.' . $this->CartonSpecification->primaryKey => $id));
		$this->set('cartonSpecification', $this->CartonSpecification->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CartonSpecification->create();
			if ($this->CartonSpecification->save($this->request->data)) {
				$this->Session->setFlash(__('The carton specification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carton specification could not be saved. Please, try again.'));
			}
		}
		$items = $this->CartonSpecification->Item->find('list');
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
		if (!$this->CartonSpecification->exists($id)) {
			throw new NotFoundException(__('Invalid carton specification'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CartonSpecification->save($this->request->data)) {
				$this->Session->setFlash(__('The carton specification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carton specification could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CartonSpecification.' . $this->CartonSpecification->primaryKey => $id));
			$this->request->data = $this->CartonSpecification->find('first', $options);
		}
		$items = $this->CartonSpecification->Item->find('list');
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
		$this->CartonSpecification->id = $id;
		if (!$this->CartonSpecification->exists()) {
			throw new NotFoundException(__('Invalid carton specification'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CartonSpecification->delete()) {
			$this->Session->setFlash(__('The carton specification has been deleted.'));
		} else {
			$this->Session->setFlash(__('The carton specification could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
