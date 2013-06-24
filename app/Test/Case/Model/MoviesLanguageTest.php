<?php
App::uses('MoviesLanguage', 'Model');

/**
 * MoviesLanguage Test Case
 *
 */
class MoviesLanguageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.movies_language',
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
		'app.movies_participant',
		'app.language'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MoviesLanguage = ClassRegistry::init('MoviesLanguage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MoviesLanguage);

		parent::tearDown();
	}

}
