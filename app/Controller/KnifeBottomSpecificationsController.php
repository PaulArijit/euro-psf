<?php
App::uses('AppController', 'Controller');
/**
 * KnifeBottomSpecifications Controller
 *
 * @property KnifeBottomSpecification $KnifeBottomSpecification
 * @property PaginatorComponent $Paginator
 */
class KnifeBottomSpecificationsController extends AppController {

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
		$this->KnifeBottomSpecification->recursive = 0;
		$this->set('knifeBottomSpecifications', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->KnifeBottomSpecification->exists($id)) {
			throw new NotFoundException(__('Invalid knife bottom specification'));
		}
		$options = array('conditions' => array('KnifeBottomSpecification.' . $this->KnifeBottomSpecification->primaryKey => $id));
		$this->set('knifeBottomSpecification', $this->KnifeBottomSpecification->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->KnifeBottomSpecification->create();
			if ($this->KnifeBottomSpecification->save($this->request->data)) {
				$this->Session->setFlash(__('The knife bottom specification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The knife bottom specification could not be saved. Please, try again.'));
			}
		}
		$items = $this->KnifeBottomSpecification->Item->find('list');
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
		if (!$this->KnifeBottomSpecification->exists($id)) {
			throw new NotFoundException(__('Invalid knife bottom specification'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->KnifeBottomSpecification->save($this->request->data)) {
				$this->Session->setFlash(__('The knife bottom specification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The knife bottom specification could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('KnifeBottomSpecification.' . $this->KnifeBottomSpecification->primaryKey => $id));
			$this->request->data = $this->KnifeBottomSpecification->find('first', $options);
		}
		$items = $this->KnifeBottomSpecification->Item->find('list');
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
		$this->KnifeBottomSpecification->id = $id;
		if (!$this->KnifeBottomSpecification->exists()) {
			throw new NotFoundException(__('Invalid knife bottom specification'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->KnifeBottomSpecification->delete()) {
			$this->Session->setFlash(__('The knife bottom specification has been deleted.'));
		} else {
			$this->Session->setFlash(__('The knife bottom specification could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
