<?php
App::uses('AppModel', 'Model');
/**
 * BandTrack Model
 *
 * @property Band $Band
 */
class BandTrack extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'band_tracks';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

	public $actsAs = array(
        'Upload.Upload' => array(
            'url_track' => array()
        )
    );

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'band_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
		'duration' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'url_track' => array(
            'rule' => array(
            	'extension',
            	array('mp3','ogg','wav','aac')
            ),
            'required' => true,
            'allowEmpty' => false,
            'message' => 'Invalid File'
        )
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Band' => array(
			'className' => 'Band',
			'foreignKey' => 'band_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
