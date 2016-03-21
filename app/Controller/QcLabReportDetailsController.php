<?php

App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class QcLabReportDetailsController extends AppController {

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
        $this->QcLabReportDetail->recursive = 0;
        $this->set('qcLabReportDetails', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->QcLabReportDetail->exists($id)) {
            throw new NotFoundException(__('Invalid QC Lab Report'));
        }
        $options = array('conditions' => array('QcLabReportDetail.' . $this->QcLabReportDetail->primaryKey => $id));
        $this->set('qcLabReportDetail', $this->QcLabReportDetail->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->QcLabReportDetail->create();
            if ($this->QcLabReportDetail->save($this->request->data)) {
                 $lastQcId = $this->QcLabReportDetail->getLastInsertId();
                $this->Session->setFlash(__('The QC Lab Report has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'view', 'controller' => 'QcLabReportDetails', $lastQcId));
            } else {
                $this->Session->setFlash(__('The QC Lab Report could not be saved. Please, try again.'), 'flash_warning');
            }
        }

    }
}