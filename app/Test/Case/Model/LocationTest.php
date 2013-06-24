<?php
App::uses('Location', 'Model');

/**
 * Location Test Case
 *
 */
class LocationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.location',
		'app.cinema',
		'app.showtime',
		'app.user_review',
		'app.movie',
		'app.content_rating',
		'app.movie_photo',
		'app.movie_trailer',
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
		$this->Location = ClassRegistry::init('Location');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Location);

		parent::tearDown();
	}

}
