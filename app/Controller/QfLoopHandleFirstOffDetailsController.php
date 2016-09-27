<?php
App::uses('AppController', 'Controller');
/**
 * QfLoopHandleFirstOffDetails Controller
 *
 * @property QfLoopHandleFirstOffDetail $QfLoopHandleFirstOffDetail
 * @property PaginatorComponent $Paginator
 */
class QfLoopHandleFirstOffDetailsController extends AppController {

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
		$this->QfLoopHandleFirstOffDetail->recursive = 0;
		$this->set('qfLoopHandleFirstOffDetails', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->QfLoopHandleFirstOffDetail->exists($id)) {
			throw new NotFoundException(__('Invalid qf loop handle first off detail'));
		}
		$options = array('conditions' => array('QfLoopHandleFirstOffDetail.' . $this->QfLoopHandleFirstOffDetail->primaryKey => $id));
		$this->set('qfLoopHandleFirstOffDetail', $this->QfLoopHandleFirstOffDetail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->QfLoopHandleFirstOffDetail->create();
			if ($this->QfLoopHandleFirstOffDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The qf loop handle first off detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The qf loop handle first off detail could not be saved. Please, try again.'));
			}
		}
		$items = $this->QfLoopHandleFirstOffDetail->Item->find('list');
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
		if (!$this->QfLoopHandleFirstOffDetail->exists($id)) {
			throw new NotFoundException(__('Invalid qf loop handle first off detail'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->QfLoopHandleFirstOffDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The qf loop handle first off detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The qf loop handle first off detail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('QfLoopHandleFirstOffDetail.' . $this->QfLoopHandleFirstOffDetail->primaryKey => $id));
			$this->request->data = $this->QfLoopHandleFirstOffDetail->find('first', $options);
		}
		$items = $this->QfLoopHandleFirstOffDetail->Item->find('list');
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
		$this->QfLoopHandleFirstOffDetail->id = $id;
		if (!$this->QfLoopHandleFirstOffDetail->exists()) {
			throw new NotFoundException(__('Invalid qf loop handle first off detail'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->QfLoopHandleFirstOffDetail->delete()) {
			$this->Session->setFlash(__('The qf loop handle first off detail has been deleted.'));
		} else {
			$this->Session->setFlash(__('The qf loop handle first off detail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
