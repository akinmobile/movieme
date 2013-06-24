<?php
App::uses('MoviesGenre', 'Model');

/**
 * MoviesGenre Test Case
 *
 */
class MoviesGenreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.movies_genre',
		'app.genre',
		'app.movie',
		'app.content_rating',
		'app.movie_photo',
		'app.movie_trailer',
		'app.showtime',
		'app.user_review',
		'app.cinema',
		'app.location',
		'app.cinemas_movie',
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
		$this->MoviesGenre = ClassRegistry::init('MoviesGenre');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MoviesGenre);

		parent::tearDown();
	}

}
