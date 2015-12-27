<?php
App::uses('AppController', 'Controller');
/**
 * QfPositiveReleaseDetails Controller
 *
 * @property QfPositiveReleaseDetail $QfPositiveReleaseDetail
 * @property PaginatorComponent $Paginator
 */
class QfPositiveReleaseDetailsController extends AppController {

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
		$this->QfPositiveReleaseDetail->recursive = 0;
		$this->set('qfPositiveReleaseDetails', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->QfPositiveReleaseDetail->exists($id)) {
			throw new NotFoundException(__('Invalid qf positive release detail'));
		}
		$options = array('conditions' => array('QfPositiveReleaseDetail.' . $this->QfPositiveReleaseDetail->primaryKey => $id));
		$this->set('qfPositiveReleaseDetail', $this->QfPositiveReleaseDetail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->QfPositiveReleaseDetail->create();
			if ($this->QfPositiveReleaseDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The qf positive release detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The qf positive release detail could not be saved. Please, try again.'));
			}
		}
		$items = $this->QfPositiveReleaseDetail->Item->find('list');
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
		if (!$this->QfPositiveReleaseDetail->exists($id)) {
			throw new NotFoundException(__('Invalid qf positive release detail'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->QfPositiveReleaseDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The qf positive release detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The qf positive release detail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('QfPositiveReleaseDetail.' . $this->QfPositiveReleaseDetail->primaryKey => $id));
			$this->request->data = $this->QfPositiveReleaseDetail->find('first', $options);
		}
		$items = $this->QfPositiveReleaseDetail->Item->find('list');
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
		$this->QfPositiveReleaseDetail->id = $id;
		if (!$this->QfPositiveReleaseDetail->exists()) {
			throw new NotFoundException(__('Invalid qf positive release detail'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->QfPositiveReleaseDetail->delete()) {
			$this->Session->setFlash(__('The qf positive release detail has been deleted.'));
		} else {
			$this->Session->setFlash(__('The qf positive release detail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
