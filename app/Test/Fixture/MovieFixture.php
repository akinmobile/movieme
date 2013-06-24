<?php
/**
 * MovieFixture
 *
 */
class MovieFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'movie_length' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10),
		'thumbnail_url' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'active' => array('type' => 'boolean', 'null' => true, 'default' => '1', 'key' => 'index'),
		'release_date' => array('type' => 'date', 'null' => true, 'default' => null, 'key' => 'index'),
		'imdb_link' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'rt_link' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'web_link' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'imdb_rating' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '3,1'),
		'rt_rating' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '3,1'),
		'cn_rating' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '3,1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'content_rating_id' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 6),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'active' => array('column' => 'active', 'unique' => 0),
			'release_date' => array('column' => 'release_date', 'unique' => 0)
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
			'name' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'movie_length' => 1,
			'thumbnail_url' => 'Lorem ipsum dolor sit amet',
			'active' => 1,
			'release_date' => '2013-06-24',
			'imdb_link' => 'Lorem ipsum dolor sit amet',
			'rt_link' => 'Lorem ipsum dolor sit amet',
			'web_link' => 'Lorem ipsum dolor sit amet',
			'imdb_rating' => 1,
			'rt_rating' => 1,
			'cn_rating' => 1,
			'created' => '2013-06-24 13:16:18',
			'content_rating_id' => 1
		),
	);

}
