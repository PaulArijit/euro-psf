<?php
App::uses('AppController', 'Controller');
/**
 * CylinderSpecifications Controller
 *
 * @property CylinderSpecification $CylinderSpecification
 * @property PaginatorComponent $Paginator
 */
class CylinderSpecificationsController extends AppController {

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
		$this->CylinderSpecification->recursive = 0;
		$this->set('cylinderSpecifications', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CylinderSpecification->exists($id)) {
			throw new NotFoundException(__('Invalid cylinder specification'));
		}
		$options = array('conditions' => array('CylinderSpecification.' . $this->CylinderSpecification->primaryKey => $id));
		$this->set('cylinderSpecification', $this->CylinderSpecification->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CylinderSpecification->create();
			if ($this->CylinderSpecification->save($this->request->data)) {
				$this->Session->setFlash(__('The cylinder specification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cylinder specification could not be saved. Please, try again.'));
			}
		}
		$items = $this->CylinderSpecification->Item->find('list');
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
		if (!$this->CylinderSpecification->exists($id)) {
			throw new NotFoundException(__('Invalid cylinder specification'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CylinderSpecification->save($this->request->data)) {
				$this->Session->setFlash(__('The cylinder specification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cylinder specification could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CylinderSpecification.' . $this->CylinderSpecification->primaryKey => $id));
			$this->request->data = $this->CylinderSpecification->find('first', $options);
		}
		$items = $this->CylinderSpecification->Item->find('list');
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
		$this->CylinderSpecification->id = $id;
		if (!$this->CylinderSpecification->exists()) {
			throw new NotFoundException(__('Invalid cylinder specification'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CylinderSpecification->delete()) {
			$this->Session->setFlash(__('The cylinder specification has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cylinder specification could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
