<?php
App::uses('MovieRole', 'Model');

/**
 * MovieRole Test Case
 *
 */
class MovieRoleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.movie_role',
		'app.movies_participant'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MovieRole = ClassRegistry::init('MovieRole');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MovieRole);

		parent::tearDown();
	}

}
