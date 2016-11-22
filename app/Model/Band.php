<?php
App::uses('AppModel', 'Model');
/**
 * Band Model
 *
 * @property Genre $Genre
 * @property BandTracks $tracks
 * @property BandPhotos $photos
 */
class Band extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'band';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	public $actsAs = array(
        'Upload.Upload' => array(
            'url_image_logo' => array(),
            'url_image_brand' => array()
        )
    );

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'genre_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
		'url_image_logo' => array(
            'rule' => array(
            	'extension',
            	array('jpeg','jpg','png','gif')
            ),
            'required' => true,
            'allowEmpty' => false,
            'message' => 'Invalid File'
        ),
		'url_image_brand' => array(
            'rule' => array(
            	'extension',
            	array('jpeg','jpg','png','gif')
            ),
            'required' => false,
            'allowEmpty' => true,
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
		'Genre' => array(
			'className' => 'Genre',
			'foreignKey' => 'genre_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'tracks' => array(
			'className' => 'BandTracks',
			'foreignKey' => 'band_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'photos' => array(
			'className' => 'BandPhotos',
			'foreignKey' => 'band_id',
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

}
