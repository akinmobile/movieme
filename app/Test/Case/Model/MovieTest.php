<?php
App::uses('Movie', 'Model');

/**
 * Movie Test Case
 *
 */
class MovieTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.movie',
		'app.content_rating',
		'app.movie_photo',
		'app.movie_trailer',
		'app.showtime',
		'app.cinemas_movie',
		'app.cinema',
		'app.location',
		'app.user_review',
		'app.user',
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
		$this->Movie = ClassRegistry::init('Movie');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Movie);

		parent::tearDown();
	}

}
