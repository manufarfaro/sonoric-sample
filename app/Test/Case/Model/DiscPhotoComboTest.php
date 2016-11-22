<?php
App::uses('DiscPhotoCombo', 'Model');

/**
 * DiscPhotoCombo Test Case
 *
 */
class DiscPhotoComboTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.disc_photo_combo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DiscPhotoCombo = ClassRegistry::init('DiscPhotoCombo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DiscPhotoCombo);

		parent::tearDown();
	}

}
