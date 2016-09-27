<?php
App::uses('AppController', 'Controller');
/**
 * CartonTopSpecifications Controller
 *
 * @property CartonTopSpecification $CartonTopSpecification
 * @property PaginatorComponent $Paginator
 */
class CartonTopSpecificationsController extends AppController {

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
		$this->CartonTopSpecification->recursive = 0;
		$this->set('cartonTopSpecifications', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CartonTopSpecification->exists($id)) {
			throw new NotFoundException(__('Invalid carton top specification'));
		}
		$options = array('conditions' => array('CartonTopSpecification.' . $this->CartonTopSpecification->primaryKey => $id));
		$this->set('cartonTopSpecification', $this->CartonTopSpecification->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CartonTopSpecification->create();
			if ($this->CartonTopSpecification->save($this->request->data)) {
				$this->Session->setFlash(__('The carton top specification has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carton top specification could not be saved. Please, try again.'));
			}
		}
		$items = $this->CartonTopSpecification->Item->find('list');
		$this->set(compact('items'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($itemId = null) {
        $this->loadModel('Item');
        if (!$this->Item->exists($itemId)) {
            throw new NotFoundException(__('Invalid carton Top specification'));
        }
        if ($this->request->is(array('post', 'put'))) {
            
            //image upload part
            $uploaddir = '../webroot/img/uploaded/';

            //check image already uploaded or not
            if (!empty($this->request->data['CartonTopSpecification']['additional_information']['name'])) {
                move_uploaded_file($this->data['CartonTopSpecification']['additional_information']['tmp_name'], $uploaddir . $this->data['CartonTopSpecification']['additional_information']['name']);
                $this->request->data['CartonTopSpecification']['additional_information'] = $this->request->data['CartonTopSpecification']['additional_information']['name'];
            } else {
                unset($this->request->data['CartonTopSpecification']['additional_information']);
            }
            
            //log//
            $this->loadModel('Log');
            $oldData = $this->CartonTopSpecification->findById($this->request->data['CartonTopSpecification']['id']);
            ////////
            
            if ($this->CartonTopSpecification->save($this->request->data)) {
                
                //log//
                $this->Log->saveLog(array('model' => 'CartonTopSpecification', 'oldData' => $oldData, 'session' => $this->Session->read('Auth.User')));
                /////////
                
                $this->Session->setFlash(__('The carton Top specification has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'edit', $itemId));
            } else {
                $this->Session->setFlash(__('The carton Top specification could not be saved. Please, try again.'), 'flash_warning');
            }
        } else {
            $cartonsTop = $this->CartonTopSpecification->findByItemId($itemId);
            $cartonTopSpecId = $cartonsTop['CartonTopSpecification']['id'];
            $options = array('conditions' => array('CartonTopSpecification.' . $this->CartonTopSpecification->primaryKey => $cartonTopSpecId));
            $this->request->data = $this->CartonTopSpecification->find('first', $options);
        }
        $this->set('itemId', $itemId);
        $this->set('tab', 'carton top');
    }

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CartonTopSpecification->id = $id;
		if (!$this->CartonTopSpecification->exists()) {
			throw new NotFoundException(__('Invalid carton top specification'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CartonTopSpecification->delete()) {
			$this->Session->setFlash(__('The carton top specification has been deleted.'));
		} else {
			$this->Session->setFlash(__('The carton top specification could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
