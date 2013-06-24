<?php
App::uses('MoviePhoto', 'Model');

/**
 * MoviePhoto Test Case
 *
 */
class MoviePhotoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.movie_photo',
		'app.movie',
		'app.content_rating',
		'app.movie_trailer',
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
		$this->MoviePhoto = ClassRegistry::init('MoviePhoto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MoviePhoto);

		parent::tearDown();
	}

}
