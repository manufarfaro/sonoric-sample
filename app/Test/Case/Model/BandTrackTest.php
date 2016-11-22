<?php
App::uses('BandTrack', 'Model');

/**
 * BandTrack Test Case
 *
 */
class BandTrackTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.band_track',
		'app.band',
		'app.genre'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BandTrack = ClassRegistry::init('BandTrack');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BandTrack);

		parent::tearDown();
	}

}
