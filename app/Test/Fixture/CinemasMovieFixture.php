<?php
/**
 * CinemasMovieFixture
 *
 */
class CinemasMovieFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'movie_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'cinema_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'start_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'key' => 'index'),
		'end_date' => array('type' => 'datetime', 'null' => true, 'default' => null, 'key' => 'index'),
		'active' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'show_status' => array('type' => 'integer', 'null' => true, 'default' => '1', 'length' => 5, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'movie_id_2' => array('column' => array('movie_id', 'cinema_id'), 'unique' => 1),
			'cinemas_movies_FKIndex1' => array('column' => 'cinema_id', 'unique' => 0),
			'cinemas_movies_FKIndex2' => array('column' => 'movie_id', 'unique' => 0),
			'movie_id' => array('column' => 'movie_id', 'unique' => 0),
			'cinema_id' => array('column' => 'cinema_id', 'unique' => 0),
			'start_date' => array('column' => 'start_date', 'unique' => 0),
			'end_date' => array('column' => 'end_date', 'unique' => 0),
			'start_date_2' => array('column' => array('start_date', 'end_date'), 'unique' => 0),
			'show_status' => array('column' => 'show_status', 'unique' => 0)
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
			'movie_id' => 1,
			'cinema_id' => 1,
			'start_date' => '2013-06-24 13:04:40',
			'end_date' => '2013-06-24 13:04:40',
			'active' => 1,
			'created' => '2013-06-24 13:04:40',
			'show_status' => 1
		),
	);

}
