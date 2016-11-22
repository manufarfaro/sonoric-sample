<?php
App::uses('VideoclipCombo', 'Model');

/**
 * VideoclipCombo Test Case
 *
 */
class VideoclipComboTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.videoclip_combo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->VideoclipCombo = ClassRegistry::init('VideoclipCombo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->VideoclipCombo);

		parent::tearDown();
	}

}
