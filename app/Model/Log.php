<?php

App::uses('AppModel', 'Model');

/**
 * Log Model
 *
 * @property User $User
 */
class Log extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'table_name' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'field_name' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'old_data' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'new_data' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'user_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Item' => array(
            'className' => 'Item',
            'foreignKey' => 'item_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
    
    public $hasMany = array(
        'LogField' => array(
            'className' => 'LogField',
            'foreignKey' => 'log_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );
    
    
    public function saveLog($params) {
//        $data = array();
//        $data       = $params['table_name'];
//        $fieldName  = $params['field_name'];
//        $oldData    = $params['old_data'];
//        $newData    = $params['new_data'];
        //pr($params); die();
        $affectedFields = $this->getAffectedFields($params);
        if (!empty($affectedFields)) {
            $data['Log'] = array(
                'table_name' => $params['model'],
                'user_id' => $params['session']['id'],
                'item_id' => $params['oldData'][$params['model']]['item_id']
            );
            
            $data['LogField'] = array();
            
            $x = 0;
            foreach ($affectedFields as $key => $value) {
                $data['LogField'][$x] = array(
                    'field_name' => $key,
                    'old_value' => $value['old'],
                    'new_value' => $value['new'],
                );
                
                $x++;
            }
        }
        
        if ($this->saveAll($data)) {
            return true;
        } else {
            return false;
        }
    }
    
    
    public function getAffectedFields($params) {
        $affected = array();
        $model = $params['model'];
        $AnotherModel = ClassRegistry::init($model);
        
        $dbData = $AnotherModel->findById($params['oldData'][$model]['id']);
        
        foreach ($dbData[$model] as $key => $value) {
            if ($params['oldData'][$model][$key] != $value) {
                $affected[$key] = array(
                    'old' => $params['oldData'][$model][$key], 
                    'new' => $value
                );
            }
        }
        
        return $affected;
    }

}
