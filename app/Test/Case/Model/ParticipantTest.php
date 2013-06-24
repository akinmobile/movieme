<?php
App::uses('Participant', 'Model');

/**
 * Participant Test Case
 *
 */
class ParticipantTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.participant',
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
		'app.movies_participant'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Participant = ClassRegistry::init('Participant');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Participant);

		parent::tearDown();
	}

}
