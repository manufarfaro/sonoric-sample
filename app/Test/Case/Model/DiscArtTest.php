<?php
App::uses('DiscArt', 'Model');

/**
 * DiscArt Test Case
 *
 */
class DiscArtTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.disc_art'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DiscArt = ClassRegistry::init('DiscArt');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DiscArt);

		parent::tearDown();
	}

}
