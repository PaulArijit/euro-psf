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
                    } else if($name == 'cal_from' && !empty ($value)) {
                        $dateObj = DateTime::createFromFormat('d-m-Y', $value);
                        $conditions['Item.created >='] = $dateObj->format('Y-m-d');
                    } else if($name == 'cal_to' && !empty ($value)) {
                        $dateObj = DateTime::createFromFormat('d-m-Y', $value);
                        $conditions['Item.created <='] = $dateObj->format('Y-m-d') . ' 23:59:59';
                    } else if($name == 'category' && strlen($value) > 0) {
                        $conditions['Item.category'] = $value;
                    }else{
                        
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
    public function add($id = 0, $tab = null) {
        if ($this->request->is('post')) {
            $this->Item->create();
            if ($this->Item->save($this->request->data)) {
                $this->Session->setFlash(__('The item has been saved.'), 'flash_success');
                return $this->redirect(array('action' => 'add', $id));
            } else {
                $this->Session->setFlash(__('The item could not be saved. Please, try again.'), 'flash_warning');
            }
        }

        $this->set('tab', $tab);
        $this->set('itemId', $id);
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Item->exists($id)) {
            throw new NotFoundException(__('Invalid item'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Item->save($this->request->data)) {
                $this->Session->setFlash(__('The item has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The item could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Item.' . $this->Item->primaryKey => $id));
            $this->request->data = $this->Item->find('first', $options);
        }
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

}
