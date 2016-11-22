<?php
App::uses('AppModel', 'Model');
/**
 * DiscArtsPhoto Model
 *
 */
class DiscArtsPhoto extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

	public $actsAs = array(
        'Upload.Upload' => array(
            'url_image' => array()
        )
    );


/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'title' => array(
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
			),
	);
}
