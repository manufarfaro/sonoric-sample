<?php
App::uses('Videoclip', 'Model');

/**
 * Videoclip Test Case
 *
 */
class VideoclipTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.videoclip'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Videoclip = ClassRegistry::init('Videoclip');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Videoclip);

		parent::tearDown();
	}

}
