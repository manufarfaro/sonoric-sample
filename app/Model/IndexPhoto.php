<?php
App::uses('AppModel', 'Model');
/**
 * IndexPhoto Model
 *
 */
class IndexPhoto extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'index_photo';

	public $actsAs = array(
        'Upload.Upload' => array(
            'url_image' => array()
        )
    );

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'url_image' => array(
            'rule' => array(
            	'extension',
            	array('jpeg','jpg','png','gif')
            ),
            'required' => true,
            'allowEmpty' => false,
            'message' => 'Invalid File'
        ),
		'url' => array(
				'rule' => array('url'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		);
}
