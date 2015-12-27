<?php
App::uses('AppController', 'Controller');
/**
 * FussetSpecifications Controller
 *
 * @property FussetSpecification $FussetSpecification
 * @property PaginatorComponent $Paginator
 */
class FussetSpecificationsController extends AppController {

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
		$this->FussetSpecification->recursive = 0;
		$this->set('fussetSpecifications', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FussetSpecification->exists($id)) {
			throw new NotFoundException(__('Invalid fusset specification'));
		}
		$options = array('conditions' => array('FussetSpecification.' . $this->FussetSpecification->primaryKey => $id));
		$this->set('fussetSpecification', $this->FussetSpecification->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FussetSpecification->create();
			if ($this->FussetSpecification->save($this->request->data)) {
				$this->Session->setFlash(__('The fusset specification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fusset specification could not be saved. Please, try again.'));
			}
		}
		$items = $this->FussetSpecification->Item->find('list');
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
		if (!$this->FussetSpecification->exists($id)) {
			throw new NotFoundException(__('Invalid fusset specification'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FussetSpecification->save($this->request->data)) {
				$this->Session->setFlash(__('The fusset specification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fusset specification could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FussetSpecification.' . $this->FussetSpecification->primaryKey => $id));
			$this->request->data = $this->FussetSpecification->find('first', $options);
		}
		$items = $this->FussetSpecification->Item->find('list');
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
		$this->FussetSpecification->id = $id;
		if (!$this->FussetSpecification->exists()) {
			throw new NotFoundException(__('Invalid fusset specification'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->FussetSpecification->delete()) {
			$this->Session->setFlash(__('The fusset specification has been deleted.'));
		} else {
			$this->Session->setFlash(__('The fusset specification could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
