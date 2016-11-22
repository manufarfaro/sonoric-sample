<?php
App::uses('AppModel', 'Model');
/**
 * Course Model
 *
 * @property CourseTeachers $teachers
 */
class Course extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'course';

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


public $validate = array(
        'title' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A title is required'
            )
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
 );

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'teachers' => array(
			'className' => 'CourseTeachers',
			'foreignKey' => 'course_id',
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

};