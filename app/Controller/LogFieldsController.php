<?php
App::uses('AppController', 'Controller');
/**
 * LogFields Controller
 *
 * @property LogField $LogField
 * @property PaginatorComponent $Paginator
 */
class LogFieldsController extends AppController {

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
		$this->LogField->recursive = 0;
		$this->set('logFields', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LogField->exists($id)) {
			throw new NotFoundException(__('Invalid log field'));
		}
		$options = array('conditions' => array('LogField.' . $this->LogField->primaryKey => $id));
		$this->set('logField', $this->LogField->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LogField->create();
			if ($this->LogField->save($this->request->data)) {
				$this->Session->setFlash(__('The log field has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The log field could not be saved. Please, try again.'));
			}
		}
		$logs = $this->LogField->Log->find('list');
		$this->set(compact('logs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->LogField->exists($id)) {
			throw new NotFoundException(__('Invalid log field'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LogField->save($this->request->data)) {
				$this->Session->setFlash(__('The log field has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The log field could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LogField.' . $this->LogField->primaryKey => $id));
			$this->request->data = $this->LogField->find('first', $options);
		}
		$logs = $this->LogField->Log->find('list');
		$this->set(compact('logs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->LogField->id = $id;
		if (!$this->LogField->exists()) {
			throw new NotFoundException(__('Invalid log field'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->LogField->delete()) {
			$this->Session->setFlash(__('The log field has been deleted.'));
		} else {
			$this->Session->setFlash(__('The log field could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
