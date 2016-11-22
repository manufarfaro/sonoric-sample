<?php
App::uses('BandPhoto', 'Model');

/**
 * BandPhoto Test Case
 *
 */
class BandPhotoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.band_photo',
		'app.band',
		'app.genre'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BandPhoto = ClassRegistry::init('BandPhoto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BandPhoto);

		parent::tearDown();
	}

}
