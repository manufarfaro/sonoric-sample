<?php
App::uses('Hiring', 'Model');

/**
 * Hiring Test Case
 *
 */
class HiringTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hiring'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Hiring = ClassRegistry::init('Hiring');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Hiring);

		parent::tearDown();
	}

}
