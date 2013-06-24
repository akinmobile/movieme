<?php
App::uses('ContentRating', 'Model');

/**
 * ContentRating Test Case
 *
 */
class ContentRatingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.content_rating',
		'app.movie'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ContentRating = ClassRegistry::init('ContentRating');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ContentRating);

		parent::tearDown();
	}

}
