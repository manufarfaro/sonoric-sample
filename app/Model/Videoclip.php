<?php
App::uses('AppModel', 'Model');
/**
 * Videoclip Model
 *
 */
class Videoclip extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'videoclip';

	public $actsAs = array(
        'Upload.Upload' => array(
            'url_image' => array()
        )
    );

	public function beforeSave($options = array()) {
	    return true;
    }

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'url_sample_video' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		),
		'url_image' => array(
            'rule' => array(
            	'extension',
            	array('jpg','png','gif')
            ),
            'required' => true,
            'allowEmpty' => false,
            'message' => 'Invalid File'
        )
	);
}
