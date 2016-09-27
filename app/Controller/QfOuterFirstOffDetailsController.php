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
	public function edit($id = null) {
		if (!$this->QfOuterFirstOffDetail->exists($id)) {
			throw new NotFoundException(__('Invalid qf outer first off detail'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->QfOuterFirstOffDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The qf outer first off detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The qf outer first off detail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('QfOuterFirstOffDetail.' . $this->QfOuterFirstOffDetail->primaryKey => $id));
			$this->request->data = $this->QfOuterFirstOffDetail->find('first', $options);
		}
		$items = $this->QfOuterFirstOffDetail->Item->find('list');
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
