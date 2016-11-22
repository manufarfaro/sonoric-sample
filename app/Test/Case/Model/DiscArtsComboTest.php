<?php
App::uses('DiscArtsCombo', 'Model');

/**
 * DiscArtsCombo Test Case
 *
 */
class DiscArtsComboTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.disc_arts_combo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DiscArtsCombo = ClassRegistry::init('DiscArtsCombo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DiscArtsCombo);

		parent::tearDown();
	}

}
