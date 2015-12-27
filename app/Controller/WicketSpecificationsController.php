<?php
App::uses('AppController', 'Controller');
/**
 * WicketSpecifications Controller
 *
 * @property WicketSpecification $WicketSpecification
 * @property PaginatorComponent $Paginator
 */
class WicketSpecificationsController extends AppController {

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
		$this->WicketSpecification->recursive = 0;
		$this->set('wicketSpecifications', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->WicketSpecification->exists($id)) {
			throw new NotFoundException(__('Invalid wicket specification'));
		}
		$options = array('conditions' => array('WicketSpecification.' . $this->WicketSpecification->primaryKey => $id));
		$this->set('wicketSpecification', $this->WicketSpecification->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->WicketSpecification->create();
			if ($this->WicketSpecification->save($this->request->data)) {
				$this->Session->setFlash(__('The wicket specification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wicket specification could not be saved. Please, try again.'));
			}
		}
		$items = $this->WicketSpecification->Item->find('list');
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
		if (!$this->WicketSpecification->exists($id)) {
			throw new NotFoundException(__('Invalid wicket specification'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->WicketSpecification->save($this->request->data)) {
				$this->Session->setFlash(__('The wicket specification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wicket specification could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('WicketSpecification.' . $this->WicketSpecification->primaryKey => $id));
			$this->request->data = $this->WicketSpecification->find('first', $options);
		}
		$items = $this->WicketSpecification->Item->find('list');
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
		$this->WicketSpecification->id = $id;
		if (!$this->WicketSpecification->exists()) {
			throw new NotFoundException(__('Invalid wicket specification'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->WicketSpecification->delete()) {
			$this->Session->setFlash(__('The wicket specification has been deleted.'));
		} else {
			$this->Session->setFlash(__('The wicket specification could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
