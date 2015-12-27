<?php
App::uses('AppController', 'Controller');
/**
 * QfBmQualityReportDetails Controller
 *
 * @property QfBmQualityReportDetail $QfBmQualityReportDetail
 * @property PaginatorComponent $Paginator
 */
class QfBmQualityReportDetailsController extends AppController {

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
		$this->QfBmQualityReportDetail->recursive = 0;
		$this->set('qfBmQualityReportDetails', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->QfBmQualityReportDetail->exists($id)) {
			throw new NotFoundException(__('Invalid qf bm quality report detail'));
		}
		$options = array('conditions' => array('QfBmQualityReportDetail.' . $this->QfBmQualityReportDetail->primaryKey => $id));
		$this->set('qfBmQualityReportDetail', $this->QfBmQualityReportDetail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->QfBmQualityReportDetail->create();
			if ($this->QfBmQualityReportDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The qf bm quality report detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The qf bm quality report detail could not be saved. Please, try again.'));
			}
		}
		$items = $this->QfBmQualityReportDetail->Item->find('list');
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
		if (!$this->QfBmQualityReportDetail->exists($id)) {
			throw new NotFoundException(__('Invalid qf bm quality report detail'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->QfBmQualityReportDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The qf bm quality report detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The qf bm quality report detail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('QfBmQualityReportDetail.' . $this->QfBmQualityReportDetail->primaryKey => $id));
			$this->request->data = $this->QfBmQualityReportDetail->find('first', $options);
		}
		$items = $this->QfBmQualityReportDetail->Item->find('list');
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
		$this->QfBmQualityReportDetail->id = $id;
		if (!$this->QfBmQualityReportDetail->exists()) {
			throw new NotFoundException(__('Invalid qf bm quality report detail'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->QfBmQualityReportDetail->delete()) {
			$this->Session->setFlash(__('The qf bm quality report detail has been deleted.'));
		} else {
			$this->Session->setFlash(__('The qf bm quality report detail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
