<?php
App::uses('CinemasMovie', 'Model');

/**
 * CinemasMovie Test Case
 *
 */
class CinemasMovieTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cinemas_movie',
		'app.movie',
		'app.cinema',
		'app.location',
		'app.showtime',
		'app.user_review'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CinemasMovie = ClassRegistry::init('CinemasMovie');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CinemasMovie);

		parent::tearDown();
	}

}
