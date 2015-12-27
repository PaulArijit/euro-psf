<?php
App::uses('AppController', 'Controller');
/**
 * QfExtFormDetails Controller
 *
 * @property QfExtFormDetail $QfExtFormDetail
 * @property PaginatorComponent $Paginator
 */
class QfExtFormDetailsController extends AppController {

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
		$this->QfExtFormDetail->recursive = 0;
		$this->set('qfExtFormDetails', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->QfExtFormDetail->exists($id)) {
			throw new NotFoundException(__('Invalid qf ext form detail'));
		}
		$options = array('conditions' => array('QfExtFormDetail.' . $this->QfExtFormDetail->primaryKey => $id));
		$this->set('qfExtFormDetail', $this->QfExtFormDetail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->QfExtFormDetail->create();
			if ($this->QfExtFormDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The qf ext form detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The qf ext form detail could not be saved. Please, try again.'));
			}
		}
		$items = $this->QfExtFormDetail->Item->find('list');
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
		if (!$this->QfExtFormDetail->exists($id)) {
			throw new NotFoundException(__('Invalid qf ext form detail'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->QfExtFormDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The qf ext form detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The qf ext form detail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('QfExtFormDetail.' . $this->QfExtFormDetail->primaryKey => $id));
			$this->request->data = $this->QfExtFormDetail->find('first', $options);
		}
		$items = $this->QfExtFormDetail->Item->find('list');
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
		$this->QfExtFormDetail->id = $id;
		if (!$this->QfExtFormDetail->exists()) {
			throw new NotFoundException(__('Invalid qf ext form detail'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->QfExtFormDetail->delete()) {
			$this->Session->setFlash(__('The qf ext form detail has been deleted.'));
		} else {
			$this->Session->setFlash(__('The qf ext form detail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
