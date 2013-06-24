<?php
/**
 * MovieTrailerFixture
 *
 */
class MovieTrailerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'movie_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'youtube_vid' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sort_order' => array('type' => 'integer', 'null' => true, 'default' => '10', 'length' => 5),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'movie_trailers_FKIndex1' => array('column' => 'movie_id', 'unique' => 0),
			'movie_id' => array('column' => 'movie_id', 'unique' => 0),
			'movie_id_2' => array('column' => array('movie_id', 'sort_order'), 'unique' => 0)
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
			'youtube_vid' => 'Lorem ipsum dolor ',
			'sort_order' => 1,
			'created' => '2013-06-24 13:09:03'
		),
	);

}
