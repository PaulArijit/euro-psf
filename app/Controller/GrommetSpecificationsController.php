<?php
App::uses('AppController', 'Controller');
/**
 * GrommetSpecifications Controller
 *
 * @property GrommetSpecification $GrommetSpecification
 * @property PaginatorComponent $Paginator
 */
class GrommetSpecificationsController extends AppController {

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
		$this->GrommetSpecification->recursive = 0;
		$this->set('grommetSpecifications', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GrommetSpecification->exists($id)) {
			throw new NotFoundException(__('Invalid grommet specification'));
		}
		$options = array('conditions' => array('GrommetSpecification.' . $this->GrommetSpecification->primaryKey => $id));
		$this->set('grommetSpecification', $this->GrommetSpecification->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GrommetSpecification->create();
			if ($this->GrommetSpecification->save($this->request->data)) {
				$this->Session->setFlash(__('The grommet specification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grommet specification could not be saved. Please, try again.'));
			}
		}
		$items = $this->GrommetSpecification->Item->find('list');
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
		if (!$this->GrommetSpecification->exists($id)) {
			throw new NotFoundException(__('Invalid grommet specification'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->GrommetSpecification->save($this->request->data)) {
				$this->Session->setFlash(__('The grommet specification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grommet specification could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GrommetSpecification.' . $this->GrommetSpecification->primaryKey => $id));
			$this->request->data = $this->GrommetSpecification->find('first', $options);
		}
		$items = $this->GrommetSpecification->Item->find('list');
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
		$this->GrommetSpecification->id = $id;
		if (!$this->GrommetSpecification->exists()) {
			throw new NotFoundException(__('Invalid grommet specification'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->GrommetSpecification->delete()) {
			$this->Session->setFlash(__('The grommet specification has been deleted.'));
		} else {
			$this->Session->setFlash(__('The grommet specification could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
