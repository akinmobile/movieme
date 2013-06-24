<?php
App::uses('Showtime', 'Model');

/**
 * Showtime Test Case
 *
 */
class ShowtimeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.showtime',
		'app.cinemas_movie',
		'app.movie',
		'app.content_rating',
		'app.movie_photo',
		'app.movie_trailer',
		'app.user_review',
		'app.cinema',
		'app.location',
		'app.genre',
		'app.movies_genre',
		'app.participant',
		'app.movies_participant'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Showtime = ClassRegistry::init('Showtime');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Showtime);

		parent::tearDown();
	}

}
