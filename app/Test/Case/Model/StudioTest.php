<?php
App::uses('Studio', 'Model');

/**
 * Studio Test Case
 *
 */
class StudioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.studio'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Studio = ClassRegistry::init('Studio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Studio);

		parent::tearDown();
	}

}
