<?php
App::uses('Band', 'Model');

/**
 * Band Test Case
 *
 */
class BandTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.band',
		'app.genre',
		'app.band_tracks',
		'app.band_photos'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Band = ClassRegistry::init('Band');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Band);

		parent::tearDown();
	}

}
