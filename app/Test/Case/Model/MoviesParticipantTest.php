<?php
App::uses('MoviesParticipant', 'Model');

/**
 * MoviesParticipant Test Case
 *
 */
class MoviesParticipantTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.movies_participant',
		'app.movie',
		'app.content_rating',
		'app.movie_photo',
		'app.movie_trailer',
		'app.showtime',
		'app.user_review',
		'app.cinema',
		'app.location',
		'app.cinemas_movie',
		'app.genre',
		'app.movies_genre',
		'app.participant',
		'app.movie_role'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MoviesParticipant = ClassRegistry::init('MoviesParticipant');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MoviesParticipant);

		parent::tearDown();
	}

}
