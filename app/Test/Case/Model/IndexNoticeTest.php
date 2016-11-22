<?php
App::uses('IndexNotice', 'Model');

/**
 * IndexNotice Test Case
 *
 */
class IndexNoticeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.index_notice'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->IndexNotice = ClassRegistry::init('IndexNotice');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->IndexNotice);

		parent::tearDown();
	}

}
