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
    public function edit($itemId = null) {
        $this->loadModel('Item');
        if (!$this->Item->exists($itemId)) {
            throw new NotFoundException(__('Invalid qf bm quality report detail'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->QfBmQualityReportDetail->save($this->request->data)) {
                $this->Session->setFlash(__('The qf bm quality report detail has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'edit', $itemId));
            } else {
                $this->Session->setFlash(__('The qf bm quality report detail could not be saved. Please, try again.'), 'flash_warning');
            }
        } else {
            $bmQualityReport = $this->QfBmQualityReportDetail->findByItemId($itemId);
            $bmQualityReportSpecId = $bmQualityReport['QfBmQualityReportDetail']['id'];
            $options = array('conditions' => array('QfBmQualityReportDetail.' . $this->QfBmQualityReportDetail->primaryKey => $bmQualityReportSpecId));
            $this->request->data = $this->QfBmQualityReportDetail->find('first', $options);
        }
        $this->set('itemId', $itemId);
        $this->set('tab', 'qf one');
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
