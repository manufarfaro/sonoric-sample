<?php
App::uses('DiscPhotoPhoto', 'Model');

/**
 * DiscPhotoPhoto Test Case
 *
 */
class DiscPhotoPhotoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.disc_photo_photo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DiscPhotoPhoto = ClassRegistry::init('DiscPhotoPhoto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DiscPhotoPhoto);

		parent::tearDown();
	}

}
