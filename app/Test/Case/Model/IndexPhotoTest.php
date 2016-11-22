<?php
App::uses('IndexPhoto', 'Model');

/**
 * IndexPhoto Test Case
 *
 */
class IndexPhotoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.index_photo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->IndexPhoto = ClassRegistry::init('IndexPhoto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->IndexPhoto);

		parent::tearDown();
	}

}
