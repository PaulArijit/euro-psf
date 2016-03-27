<?php
App::uses('AppController', 'Controller');
/**
 * QfFirstOffDetails Controller
 *
 * @property QfFirstOffDetail $QfFirstOffDetail
 * @property PaginatorComponent $Paginator
 */
class QfFirstOffDetailsController extends AppController {

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
		$this->QfFirstOffDetail->recursive = 0;
		$this->set('qfFirstOffDetails', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->QfFirstOffDetail->exists($id)) {
			throw new NotFoundException(__('Invalid qf first off detail'));
		}
		$options = array('conditions' => array('QfFirstOffDetail.' . $this->QfFirstOffDetail->primaryKey => $id));
		$this->set('qfFirstOffDetail', $this->QfFirstOffDetail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->QfFirstOffDetail->create();
			if ($this->QfFirstOffDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The qf first off detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The qf first off detail could not be saved. Please, try again.'));
			}
		}
		$items = $this->QfFirstOffDetail->Item->find('list');
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
			throw new NotFoundException(__('Invalid qf first off detail'));
		}
		if ($this->request->is(array('post', 'put'))) {                    
                        //image upload part
                        $uploaddir = '../webroot/img/uploaded/';

                        //check image already uploaded or not
                        if (!empty($this->request->data['QfFirstOffDetail']['ctn_marking']['name'])) {
                            move_uploaded_file($this->data['QfFirstOffDetail']['ctn_marking']['tmp_name'], $uploaddir . $this->data['QfFirstOffDetail']['ctn_marking']['name']);
                            $this->request->data['QfFirstOffDetail']['ctn_marking'] = $this->request->data['QfFirstOffDetail']['ctn_marking']['name'];
                        } else {
                            unset($this->request->data['QfFirstOffDetail']['ctn_marking']);
                        }
                        if (!empty($this->request->data['QfFirstOffDetail']['upload_two']['name'])) {
                            move_uploaded_file($this->data['QfFirstOffDetail']['upload_two']['tmp_name'], $uploaddir . $this->data['QfFirstOffDetail']['upload_two']['name']);
                            $this->request->data['QfFirstOffDetail']['upload_two'] = $this->request->data['QfFirstOffDetail']['upload_two']['name'];
                        } else {
                            unset($this->request->data['QfFirstOffDetail']['upload_two']);
                        }
                        if (!empty($this->request->data['QfFirstOffDetail']['upload_three']['name'])) {
                            move_uploaded_file($this->data['QfFirstOffDetail']['upload_three']['tmp_name'], $uploaddir . $this->data['QfFirstOffDetail']['upload_three']['name']);
                            $this->request->data['QfFirstOffDetail']['upload_three'] = $this->request->data['QfFirstOffDetail']['upload_three']['name'];
                        } else {
                            unset($this->request->data['QfFirstOffDetail']['upload_three']);
                        }
                        if (!empty($this->request->data['QfFirstOffDetail']['upload_four']['name'])) {
                            move_uploaded_file($this->data['QfFirstOffDetail']['upload_four']['tmp_name'], $uploaddir . $this->data['QfFirstOffDetail']['upload_four']['name']);
                            $this->request->data['QfFirstOffDetail']['upload_four'] = $this->request->data['QfFirstOffDetail']['upload_four']['name'];
                        } else {
                            unset($this->request->data['QfFirstOffDetail']['upload_four']);
                        }
                        if (!empty($this->request->data['QfFirstOffDetail']['knife_design']['name'])) {
                            move_uploaded_file($this->data['QfFirstOffDetail']['knife_design']['tmp_name'], $uploaddir . $this->data['QfFirstOffDetail']['knife_design']['name']);
                            $this->request->data['QfFirstOffDetail']['knife_design'] = $this->request->data['QfFirstOffDetail']['knife_design']['name'];
                        } else {
                            unset($this->request->data['QfFirstOffDetail']['knife_design']);
                        }
                        if (!empty($this->request->data['QfFirstOffDetail']['artwork']['name'])) {
                            move_uploaded_file($this->data['QfFirstOffDetail']['artwork']['tmp_name'], $uploaddir . $this->data['QfFirstOffDetail']['artwork']['name']);
                            $this->request->data['QfFirstOffDetail']['artwork'] = $this->request->data['QfFirstOffDetail']['artwork']['name'];
                        } else {
                            unset($this->request->data['QfFirstOffDetail']['artwork']);
                        }
                        if (!empty($this->request->data['QfFirstOffDetail']['sample_bag_attachment']['name'])) {
                            move_uploaded_file($this->data['QfFirstOffDetail']['sample_bag_attachment']['tmp_name'], $uploaddir . $this->data['QfFirstOffDetail']['sample_bag_attachment']['name']);
                            $this->request->data['QfFirstOffDetail']['sample_bag_attachment'] = $this->request->data['QfFirstOffDetail']['sample_bag_attachment']['name'];
                        } else {
                            unset($this->request->data['QfFirstOffDetail']['sample_bag_attachment']);
                        }
                    
			if ($this->QfFirstOffDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The qf first off detail has been saved.'), 'flash_success');
				return $this->redirect(array('action' => 'edit', $itemId));
			} else {
				$this->Session->setFlash(__('The qf first off detail could not be saved. Please, try again.'), 'flash_warning');
			}
		} else {
                    $firstOff = $this->QfFirstOffDetail->findByItemId($itemId);
            $firstOffSpecId = $firstOff['QfFirstOffDetail']['id'];
			$options = array('conditions' => array('QfFirstOffDetail.' . $this->QfFirstOffDetail->primaryKey => $firstOffSpecId));
			$this->request->data = $this->QfFirstOffDetail->find('first', $options);
		}
		$this->set('itemId', $itemId);
        $this->set('tab', 'qf four');
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->QfFirstOffDetail->id = $id;
		if (!$this->QfFirstOffDetail->exists()) {
			throw new NotFoundException(__('Invalid qf first off detail'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->QfFirstOffDetail->delete()) {
			$this->Session->setFlash(__('The qf first off detail has been deleted.'));
		} else {
			$this->Session->setFlash(__('The qf first off detail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
