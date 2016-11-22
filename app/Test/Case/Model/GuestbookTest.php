<?php
App::uses('Guestbook', 'Model');

/**
 * Guestbook Test Case
 *
 */
class GuestbookTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.guestbook'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Guestbook = ClassRegistry::init('Guestbook');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Guestbook);

		parent::tearDown();
	}

}
