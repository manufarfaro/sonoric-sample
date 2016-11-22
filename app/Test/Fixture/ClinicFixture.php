<?php
/**
 * ClinicFixture
 *
 */
class ClinicFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'clinic';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'url_image' => array('type' => 'string', 'null' => true, 'default' => 'noimage.jpg', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'url_link' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'dateCreated' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'url_image' => 'Lorem ipsum dolor sit amet',
			'url_link' => 'Lorem ipsum dolor sit amet',
			'dateCreated' => 1364157560
		),
	);

}
