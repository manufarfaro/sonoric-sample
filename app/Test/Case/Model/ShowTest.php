<?php
App::uses('Show', 'Model');

/**
 * Show Test Case
 *
 */
class ShowTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.show'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Show = ClassRegistry::init('Show');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Show);

		parent::tearDown();
	}

}
