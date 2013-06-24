<?php
/**
 * UserReviewFixture
 *
 */
class UserReviewFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'cinema_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 10, 'key' => 'index'),
		'movie_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'review_title' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'review_text' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'rating' => array('type' => 'integer', 'null' => true, 'default' => '5', 'length' => 5),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'users_reviews_FKIndex1' => array('column' => 'movie_id', 'unique' => 0),
			'users_reviews_FKIndex2' => array('column' => 'cinema_id', 'unique' => 0),
			'users_reviews_FKIndex3' => array('column' => 'user_id', 'unique' => 0),
			'user_id' => array('column' => 'user_id', 'unique' => 0),
			'cinema_id' => array('column' => array('cinema_id', 'movie_id'), 'unique' => 0),
			'movie_id' => array('column' => 'movie_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'cinema_id' => 1,
			'movie_id' => 1,
			'review_title' => 'Lorem ipsum dolor sit amet',
			'review_text' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'rating' => 1,
			'created' => '2013-06-24 13:14:36'
		),
	);

}
