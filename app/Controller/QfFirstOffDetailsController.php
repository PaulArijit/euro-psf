<?php
App::uses('AppController', 'Controller');
/**
 * QfFirstOffDetails Controller
 *
 * @property QfFirstOffDetail $QfFirstOffDetail
 * @property PaginatorComponent $Paginator
 */
class QfFirstOffDetailsController extends AppController {

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
		$this->QfFirstOffDetail->recursive = 0;
		$this->set('qfFirstOffDetails', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->QfFirstOffDetail->exists($id)) {
			throw new NotFoundException(__('Invalid qf first off detail'));
		}
		$options = array('conditions' => array('QfFirstOffDetail.' . $this->QfFirstOffDetail->primaryKey => $id));
		$this->set('qfFirstOffDetail', $this->QfFirstOffDetail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->QfFirstOffDetail->create();
			if ($this->QfFirstOffDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The qf first off detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The qf first off detail could not be saved. Please, try again.'));
			}
		}
		$items = $this->QfFirstOffDetail->Item->find('list');
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
		if (!$this->QfFirstOffDetail->exists($id)) {
			throw new NotFoundException(__('Invalid qf first off detail'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->QfFirstOffDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The qf first off detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The qf first off detail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('QfFirstOffDetail.' . $this->QfFirstOffDetail->primaryKey => $id));
			$this->request->data = $this->QfFirstOffDetail->find('first', $options);
		}
		$items = $this->QfFirstOffDetail->Item->find('list');
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
		$this->QfFirstOffDetail->id = $id;
		if (!$this->QfFirstOffDetail->exists()) {
			throw new NotFoundException(__('Invalid qf first off detail'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->QfFirstOffDetail->delete()) {
			$this->Session->setFlash(__('The qf first off detail has been deleted.'));
		} else {
			$this->Session->setFlash(__('The qf first off detail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
