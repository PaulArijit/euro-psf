<?php
App::uses('AppController', 'Controller');
/**
 * KnifeTopSpecifications Controller
 *
 * @property KnifeTopSpecification $KnifeTopSpecification
 * @property PaginatorComponent $Paginator
 */
class KnifeTopSpecificationsController extends AppController {

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
		$this->KnifeTopSpecification->recursive = 0;
		$this->set('knifeTopSpecifications', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->KnifeTopSpecification->exists($id)) {
			throw new NotFoundException(__('Invalid knife top specification'));
		}
		$options = array('conditions' => array('KnifeTopSpecification.' . $this->KnifeTopSpecification->primaryKey => $id));
		$this->set('knifeTopSpecification', $this->KnifeTopSpecification->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->KnifeTopSpecification->create();
			if ($this->KnifeTopSpecification->save($this->request->data)) {
				$this->Session->setFlash(__('The knife top specification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The knife top specification could not be saved. Please, try again.'));
			}
		}
		$items = $this->KnifeTopSpecification->Item->find('list');
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
		if (!$this->KnifeTopSpecification->exists($id)) {
			throw new NotFoundException(__('Invalid knife top specification'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->KnifeTopSpecification->save($this->request->data)) {
				$this->Session->setFlash(__('The knife top specification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The knife top specification could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('KnifeTopSpecification.' . $this->KnifeTopSpecification->primaryKey => $id));
			$this->request->data = $this->KnifeTopSpecification->find('first', $options);
		}
		$items = $this->KnifeTopSpecification->Item->find('list');
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
		$this->KnifeTopSpecification->id = $id;
		if (!$this->KnifeTopSpecification->exists()) {
			throw new NotFoundException(__('Invalid knife top specification'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->KnifeTopSpecification->delete()) {
			$this->Session->setFlash(__('The knife top specification has been deleted.'));
		} else {
			$this->Session->setFlash(__('The knife top specification could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
