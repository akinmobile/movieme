<?php
App::uses('Cinema', 'Model');

/**
 * Cinema Test Case
 *
 */
class CinemaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cinema',
		'app.location',
		'app.showtime',
		'app.user_review',
		'app.movie',
		'app.cinemas_movie'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cinema = ClassRegistry::init('Cinema');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cinema);

		parent::tearDown();
	}

}
