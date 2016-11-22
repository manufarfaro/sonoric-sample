<?php
App::uses('DiscPrintingCombo', 'Model');

/**
 * DiscPrintingCombo Test Case
 *
 */
class DiscPrintingComboTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.disc_printing_combo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DiscPrintingCombo = ClassRegistry::init('DiscPrintingCombo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DiscPrintingCombo);

		parent::tearDown();
	}

}
