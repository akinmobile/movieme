<?php
App::uses('MovieTrailer', 'Model');

/**
 * MovieTrailer Test Case
 *
 */
class MovieTrailerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.movie_trailer',
		'app.movie',
		'app.content_rating',
		'app.movie_photo',
		'app.showtime',
		'app.user_review',
		'app.cinema',
		'app.location',
		'app.cinemas_movie',
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
		$this->MovieTrailer = ClassRegistry::init('MovieTrailer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MovieTrailer);

		parent::tearDown();
	}

}
