<?php
App::uses('Language', 'Model');

/**
 * Language Test Case
 *
 */
class LanguageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.language',
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
		'app.movies_language'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Language = ClassRegistry::init('Language');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Language);

		parent::tearDown();
	}

}
