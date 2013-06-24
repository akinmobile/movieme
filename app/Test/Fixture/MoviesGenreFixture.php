<?php
/**
 * MoviesGenreFixture
 *
 */
class MoviesGenreFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'genre_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'movie_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'movies_genres_FKIndex1' => array('column' => 'genre_id', 'unique' => 0),
			'movies_genres_FKIndex2' => array('column' => 'movie_id', 'unique' => 0),
			'genre_id' => array('column' => array('genre_id', 'movie_id'), 'unique' => 0),
			'genre_id_2' => array('column' => 'genre_id', 'unique' => 0),
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
			'genre_id' => 1,
			'movie_id' => 1
		),
	);

}
