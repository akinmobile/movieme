<?php
App::uses('MoviesController', 'Controller');

/**
 * MoviesController Test Case
 *
 */
class MoviesControllerTest extends ControllerTestCase {

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
 * testBackendIndex method
 *
 * @return void
 */
	public function testBackendIndex() {
	}

/**
 * testBackendView method
 *
 * @return void
 */
	public function testBackendView() {
	}

/**
 * testBackendAdd method
 *
 * @return void
 */
	public function testBackendAdd() {
	}

/**
 * testBackendEdit method
 *
 * @return void
 */
	public function testBackendEdit() {
	}

/**
 * testBackendDelete method
 *
 * @return void
 */
	public function testBackendDelete() {
	}

}
