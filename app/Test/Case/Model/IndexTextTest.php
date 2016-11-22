<?php
App::uses('IndexText', 'Model');

/**
 * IndexText Test Case
 *
 */
class IndexTextTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.index_text'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->IndexText = ClassRegistry::init('IndexText');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->IndexText);

		parent::tearDown();
	}

}
