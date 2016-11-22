<?php
App::uses('DiscArtsPhoto', 'Model');

/**
 * DiscArtsPhoto Test Case
 *
 */
class DiscArtsPhotoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.disc_arts_photo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DiscArtsPhoto = ClassRegistry::init('DiscArtsPhoto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DiscArtsPhoto);

		parent::tearDown();
	}

}
