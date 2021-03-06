<?php

App::uses('AppController', 'Controller');

/**
 * Items Controller
 *
 * @property Item $Item
 * @property PaginatorComponent $Paginator
 */
class ItemsController extends AppController {

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
        $conditions = array();
        $limit = 10;
        if (($this->request->is('post') || $this->request->is('put')) && isset($this->data['Filter'])) {
            $filter_url = array();
            $filter_url['controller'] = $this->request->params['controller'];
            $filter_url['action'] = $this->request->params['action'];
            $filter_url['page'] = 1;
            foreach ($this->data['Filter'] as $name => $value) {
                if (trim($value)) {
                    if ($name == 'cal_from' || $name == 'cal_to') {
                        $filter_url[$name] = urlencode(str_replace('/', '-', $value));
                    } else {
                        $filter_url[$name] = urlencode($value);
                    }
                }
            }
            return $this->redirect($filter_url);
        } else {
            foreach ($this->request->params['named'] as $name => $value) {
                if (!in_array($name, array('page', 'sort', 'direction'))) {
                    $value = urldecode($value);
                    if ($name == 'limit') {
                        $limit = $value;
                    } else if ($name == 'value' && strlen(trim($value)) > 0) {
                        if ($this->request->params['named']['field'] == 'id') {
                            $conditions['Item.' . $this->request->params['named']['field']] = $value;
                        } elseif ($this->request->params['named']['field'] == 'description') {
                            $conditions['OR'] = array(
                                array('Item.description LIKE ' => "%$value%"));
                        } else if ($this->request->params['named']['field'] == 'sapcode') {
                            $conditions['Item.' . $this->request->params['named']['field']] = $value;
                        } else {
                            $conditions['Item.' . $this->request->params['named']['field'] . ' LIKE '] = "%$value%";
                        }
                    } else if ($name == 'cal_from' && !empty($value)) {
                        $dateObj = DateTime::createFromFormat('d-m-Y', $value);
                        $conditions['Item.created >='] = $dateObj->format('Y-m-d');
                    } else if ($name == 'cal_to' && !empty($value)) {
                        $dateObj = DateTime::createFromFormat('d-m-Y', $value);
                        $conditions['Item.created <='] = $dateObj->format('Y-m-d') . ' 23:59:59';
                    } else if ($name == 'category' && strlen($value) > 0) {
                        $conditions['Item.category'] = $value;
                    } else {
                        
                    }
                    $this->request->data['Filter'][$name] = $value;
                }
            }
        }

        $this->paginate = array(
            'limit' => $limit,
            'order' => 'Item.id DESC',
            'conditions' => $conditions
        );

        //$this->Item->recursive = 0;
        $this->set('items', $this->Paginator->paginate());
    }
    
     public function index_approved() {
        $conditions = array('Item.status' => 1 );
        $limit = 10;
        if (($this->request->is('post') || $this->request->is('put')) && isset($this->data['Filter'])) {
            $filter_url = array();
            $filter_url['controller'] = $this->request->params['controller'];
            $filter_url['action'] = $this->request->params['action'];
            $filter_url['page'] = 1;
            foreach ($this->data['Filter'] as $name => $value) {
                if (trim($value)) {
                    if ($name == 'cal_from' || $name == 'cal_to') {
                        $filter_url[$name] = urlencode(str_replace('/', '-', $value));
                    } else {
                        $filter_url[$name] = urlencode($value);
                    }
                }
            }
            return $this->redirect($filter_url);
        } else {
            foreach ($this->request->params['named'] as $name => $value) {
                if (!in_array($name, array('page', 'sort', 'direction'))) {
                    $value = urldecode($value);
                    if ($name == 'limit') {
                        $limit = $value;
                    } else if ($name == 'value' && strlen(trim($value)) > 0) {
                        if ($this->request->params['named']['field'] == 'id') {
                            $conditions['Item.' . $this->request->params['named']['field']] = $value;
                        } elseif ($this->request->params['named']['field'] == 'description') {
                            $conditions['OR'] = array(
                                array('Item.description LIKE ' => "%$value%"));
                        } else if ($this->request->params['named']['field'] == 'sapcode') {
                            $conditions['Item.' . $this->request->params['named']['field']] = $value;
                        } else {
                            $conditions['Item.' . $this->request->params['named']['field'] . ' LIKE '] = "%$value%";
                        }
                    } else if ($name == 'cal_from' && !empty($value)) {
                        $dateObj = DateTime::createFromFormat('d-m-Y', $value);
                        $conditions['Item.created >='] = $dateObj->format('Y-m-d');
                    } else if ($name == 'cal_to' && !empty($value)) {
                        $dateObj = DateTime::createFromFormat('d-m-Y', $value);
                        $conditions['Item.created <='] = $dateObj->format('Y-m-d') . ' 23:59:59';
                    } else if ($name == 'category' && strlen($value) > 0) {
                        $conditions['Item.category'] = $value;
                    } else {
                        
                    }
                    $this->request->data['Filter'][$name] = $value;
                }
            }
        }

        $this->paginate = array(
            'limit' => $limit,
            'order' => 'Item.id DESC',
            'conditions' => $conditions
        );

        //$this->Item->recursive = 0;
        $this->set('items', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Item->exists($id)) {
            throw new NotFoundException(__('Invalid item'));
        }
        $options = array('conditions' => array('Item.' . $this->Item->primaryKey => $id));
        $this->set('item', $this->Item->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            /* save blank data */
            $this->request->data['ProductSpecification'][0] = array('prepared_by' => $this->Session->read('Auth.User.username'));
            $this->request->data['CartonSpecification'][0] = array('npi' => $this->Session->read('Auth.User.username'));
            $this->request->data['DispenserSpecification'][0] = array('npi' => $this->Session->read('Auth.User.username'));
            $this->request->data['PlaneBoardSpecification'][0] = array('npi' => $this->Session->read('Auth.User.username'));
            $this->request->data['CartonTopSpecification'][0] = array('npi' => $this->Session->read('Auth.User.username'));
            $this->request->data['CartonBottomSpecification'][0] = array('npi' => $this->Session->read('Auth.User.username'));
            $this->request->data['LayerPadSpecification'][0] = array('npi' => $this->Session->read('Auth.User.username'));
            $this->request->data['CoreSpecification'][0] = array('npi' => $this->Session->read('Auth.User.username'));
            $this->request->data['CylinderSpecification'][0] = array('npi' => $this->Session->read('Auth.User.username'));
            $this->request->data['FlexoPlateSpecification'][0] = array('npi' => $this->Session->read('Auth.User.username'));
            $this->request->data['FussetSpecification'][0] = array('npi' => $this->Session->read('Auth.User.username'));
            $this->request->data['GrommetSpecification'][0] = array('npi' => $this->Session->read('Auth.User.username'));
            $this->request->data['KnifeSpecification'][0] = array('npi' => $this->Session->read('Auth.User.username'));
            $this->request->data['KnifeTopSpecification'][0] = array('npi' => $this->Session->read('Auth.User.username'));
            $this->request->data['KnifeBottomSpecification'][0] = array('npi' => $this->Session->read('Auth.User.username'));
            $this->request->data['LabelSpecification'][0] = array('npi' => $this->Session->read('Auth.User.username'));
            $this->request->data['WicketSpecification'][0] = array('npi' => $this->Session->read('Auth.User.username'));
            $this->request->data['QfBmQualityReportDetail'][0] = array('npi' => $this->Session->read('Auth.User.username'));
            $this->request->data['QfExtFirstOffDetail'][0] = array('npi' => $this->Session->read('Auth.User.username'));
            $this->request->data['QfOuterFirstOffDetail'][0] = array('npi' => $this->Session->read('Auth.User.username'));
            $this->request->data['QfLoopHandleFirstOffDetail'][0] = array('npi' => $this->Session->read('Auth.User.username'));
            $this->request->data['QfExtFormDetail'][0] = array('npi' => $this->Session->read('Auth.User.username'));
            $this->request->data['QfFirstOffDetail'][0] = array('npi' => $this->Session->read('Auth.User.username'));
            $this->request->data['QfPositiveReleaseDetail'][0] = array('npi' => $this->Session->read('Auth.User.username'));

            //pr($this->request->data);

            $this->Item->create();
            if ($this->Item->saveAll($this->request->data)) {
                $lastId = $this->Item->getLastInsertId(); //get last item id created. 
                $this->Session->setFlash(__('The item has been saved.'), 'flash_success');
                //$productId = $this->Item->ProductSpecification->getLastInsertID();                
                return $this->redirect(array('action' => 'edit', 'controller' => 'ProductSpecifications', $lastId));
            } else {
                $this->Session->setFlash(__('The item could not be saved. Please, try again.'), 'flash_warning');
            }
        }
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null, $tab = null) {
        if (!$this->Item->exists($id)) {
            throw new NotFoundException(__('Invalid item'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Item->saveAll($this->request->data)) {
                $this->Session->setFlash(__('The item has been saved.'), 'flash_success');
                $curItemId = $this->request->data['Item']['id'];
                return $this->redirect(array('action' => 'edit', 'controller' => 'ProductSpecifications', $curItemId));
            } else {
                $this->Session->setFlash(__('The item could not be saved. Please, try again.'), 'flash_warning');
            }
        } else {
            $options = array('conditions' => array('Item.' . $this->Item->primaryKey => $id));
            $this->request->data = $this->Item->find('first', $options);
        }

        $this->set('tab', $tab);
        $this->set('itemId', $id);
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Item->id = $id;
        if (!$this->Item->exists()) {
            throw new NotFoundException(__('Invalid item'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Item->delete()) {
            $this->Session->setFlash(__('The item has been deleted.'), 'flash_danger');
        } else {
            $this->Session->setFlash(__('The item could not be deleted. Please, try again.'), 'flash_warning');
        }
        return $this->redirect(array('action' => 'index'));
    }

    /**
     * view modal method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view_modal($id = null) {
        $this->Item->recursive = 2;
        $this->layout = 'ajax';
        if (!$this->Item->exists($id)) {
            throw new NotFoundException(__('Invalid Item'));
        }
        $options = array('conditions' => array('Item.' . $this->Item->primaryKey => $id));
        $this->set('item', $this->Item->find('first', $options));
    }

    /**
     * toggle_status method
     */
    public function toggle_status() {
        $response = array();
        $this->autoRender = false;
        $status = $_POST['status'];
        $item_id = $_POST['item_id'];
        
        if ($this->Item->save(array('status' => $status,  'issued_date' => date('Y-m-d H:i:s'), 'approved_by' => $this->Session->read('Auth.User.id'), 'id' => $item_id))) {
            $response['flag'] = true;
        } else {
            $response['flag'] = false;
        }

        if ($status == 0) {
            $this->Item->save(array('status' => 1, 'issued_date' => date('Y-m-d H:i:s'), 'approved_by' => $this->Session->read('Auth.User.id'), 'id' => $item_id));
        } else {
            $this->Item->save(array('status' => 0, 'id' => $item_id));
        }

        

        $response['item_id'] = $item_id;
        echo json_encode($response);
    }

}

