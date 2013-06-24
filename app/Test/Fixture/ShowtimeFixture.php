<?php
/**
 * ShowtimeFixture
 *
 */
class ShowtimeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'cinemas_movie_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'movie_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'cinema_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'start_day_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'end_day_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'adult_price' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '6,2'),
		'student_price' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '6,2'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'active' => array('type' => 'boolean', 'null' => true, 'default' => '1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'showtimes_FKIndex1' => array('column' => 'start_day_id', 'unique' => 0),
			'showtimes_FKIndex2' => array('column' => 'end_day_id', 'unique' => 0),
			'showtimes_FKIndex3' => array('column' => 'cinema_id', 'unique' => 0),
			'showtimes_FKIndex4' => array('column' => 'movie_id', 'unique' => 0),
			'showtimes_FKIndex5' => array('column' => 'cinemas_movie_id', 'unique' => 0),
			'movie_id' => array('column' => 'movie_id', 'unique' => 0),
			'cinema_id' => array('column' => 'cinema_id', 'unique' => 0),
			'movie_id_2' => array('column' => array('movie_id', 'cinema_id'), 'unique' => 0),
			'start_day_id' => array('column' => array('start_day_id', 'end_day_id'), 'unique' => 0)
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
			'cinemas_movie_id' => 1,
			'movie_id' => 1,
			'cinema_id' => 1,
			'start_day_id' => 1,
			'end_day_id' => 1,
			'adult_price' => 1,
			'student_price' => 1,
			'created' => '2013-06-24 13:11:17',
			'active' => 1
		),
	);

}
