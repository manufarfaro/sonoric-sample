<?php
App::uses('DiscPrintingPhoto', 'Model');

/**
 * DiscPrintingPhoto Test Case
 *
 */
class DiscPrintingPhotoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.disc_printing_photo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DiscPrintingPhoto = ClassRegistry::init('DiscPrintingPhoto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DiscPrintingPhoto);

		parent::tearDown();
	}

}
