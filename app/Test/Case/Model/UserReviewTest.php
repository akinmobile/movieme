<?php
App::uses('UserReview', 'Model');

/**
 * UserReview Test Case
 *
 */
class UserReviewTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_review',
		'app.user',
		'app.cinema',
		'app.location',
		'app.showtime',
		'app.cinemas_movie',
		'app.movie',
		'app.content_rating',
		'app.movie_photo',
		'app.movie_trailer',
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
		$this->UserReview = ClassRegistry::init('UserReview');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserReview);

		parent::tearDown();
	}

}
