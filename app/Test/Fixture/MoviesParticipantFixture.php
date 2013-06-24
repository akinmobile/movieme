<?php
/**
 * MoviesParticipantFixture
 *
 */
class MoviesParticipantFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'movie_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'movie_role_id' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 10, 'key' => 'index'),
		'participant_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'movie_id' => array('column' => array('movie_id', 'movie_role_id', 'participant_id'), 'unique' => 1),
			'movies_has_participants_FKIndex1' => array('column' => 'movie_id', 'unique' => 0),
			'movies_has_participants_FKIndex2' => array('column' => 'participant_id', 'unique' => 0),
			'movies_participants_FKIndex3' => array('column' => 'movie_role_id', 'unique' => 0),
			'movie_role_id' => array('column' => 'movie_role_id', 'unique' => 0),
			'movie_id_2' => array('column' => 'movie_id', 'unique' => 0),
			'participant_id' => array('column' => 'participant_id', 'unique' => 0)
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
			'movie_role_id' => 1,
			'participant_id' => 1
		),
	);

}
