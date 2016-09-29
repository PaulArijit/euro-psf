<?php
App::uses('AppController', 'Controller');
/**
 * QfLoopHandleFirstOffDetails Controller
 *
 * @property QfLoopHandleFirstOffDetail $QfLoopHandleFirstOffDetail
 * @property PaginatorComponent $Paginator
 */
class QfLoopHandleFirstOffDetailsController extends AppController {

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
		$this->QfLoopHandleFirstOffDetail->recursive = 0;
		$this->set('qfLoopHandleFirstOffDetails', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->QfLoopHandleFirstOffDetail->exists($id)) {
			throw new NotFoundException(__('Invalid qf loop handle first off detail'));
		}
		$options = array('conditions' => array('QfLoopHandleFirstOffDetail.' . $this->QfLoopHandleFirstOffDetail->primaryKey => $id));
		$this->set('qfLoopHandleFirstOffDetail', $this->QfLoopHandleFirstOffDetail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->QfLoopHandleFirstOffDetail->create();
			if ($this->QfLoopHandleFirstOffDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The qf loop handle first off detail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The qf loop handle first off detail could not be saved. Please, try again.'));
			}
		}
		$items = $this->QfLoopHandleFirstOffDetail->Item->find('list');
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
            throw new NotFoundException(__('Invalid qf Loop Handle first off detail'));
        }
        if ($this->request->is(array('post', 'put'))) {
            //image upload part
            $uploaddir = '../webroot/img/uploaded/';

            //check image already uploaded or not
            if (!empty($this->request->data['QfLoopHandleFirstOffDetail']['artwork_detail']['name'])) {
                move_uploaded_file($this->data['QfLoopHandleFirstOffDetail']['artwork_detail']['tmp_name'], $uploaddir . $this->data['QfLoopHandleFirstOffDetail']['artwork_detail']['name']);
                $this->request->data['QfLoopHandleFirstOffDetail']['artwork_detail'] = $this->request->data['QfLoopHandleFirstOffDetail']['artwork_detail']['name'];
            } else {
                unset($this->request->data['QfLoopHandleFirstOffDetail']['artwork_detail']);
            }
            if (!empty($this->request->data['QfLoopHandleFirstOffDetail']['sample_bag_attachment']['name'])) {
                move_uploaded_file($this->data['QfLoopHandleFirstOffDetail']['sample_bag_attachment']['tmp_name'], $uploaddir . $this->data['QfLoopHandleFirstOffDetail']['sample_bag_attachment']['name']);
                $this->request->data['QfLoopHandleFirstOffDetail']['sample_bag_attachment'] = $this->request->data['QfLoopHandleFirstOffDetail']['sample_bag_attachment']['name'];
            } else {
                unset($this->request->data['QfLoopHandleFirstOffDetail']['sample_bag_attachment']);
            }

            //log//
            $this->loadModel('Log');
            $oldData = $this->QfLoopHandleFirstOffDetail->findById($this->request->data['QfLoopHandleFirstOffDetail']['id']);
            ////////

            if ($this->QfLoopHandleFirstOffDetail->save($this->request->data)) {

                //log//
                $this->Log->saveLog(array('model' => 'QfLoopHandleFirstOffDetail', 'oldData' => $oldData, 'session' => $this->Session->read('Auth.User')));
                /////////

                $this->Session->setFlash(__('The qf ext first off detail has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'edit', $itemId));
            } else {
                $this->Session->setFlash(__('The qf ext first off detail could not be saved. Please, try again.'), 'flash_warning');
            }
        } else {
            $loopHandleFirstOff = $this->QfLoopHandleFirstOffDetail->findByItemId($itemId);
            $loopHandleFirstOffSpecId = $loopHandleFirstOff['QfLoopHandleFirstOffDetail']['id'];
            $options = array('conditions' => array('QfLoopHandleFirstOffDetail.' . $this->QfLoopHandleFirstOffDetail->primaryKey => $loopHandleFirstOffSpecId));
            $this->request->data = $this->QfLoopHandleFirstOffDetail->find('first', $options);
        }
        $this->set('itemId', $itemId);
        $this->set('tab', 'lhf');
    }

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->QfLoopHandleFirstOffDetail->id = $id;
		if (!$this->QfLoopHandleFirstOffDetail->exists()) {
			throw new NotFoundException(__('Invalid qf loop handle first off detail'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->QfLoopHandleFirstOffDetail->delete()) {
			$this->Session->setFlash(__('The qf loop handle first off detail has been deleted.'));
		} else {
			$this->Session->setFlash(__('The qf loop handle first off detail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
