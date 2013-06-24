<?php
/**
 * MoviePhotoFixture
 *
 */
class MoviePhotoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'movie_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'photo_url' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sort_order' => array('type' => 'integer', 'null' => true, 'default' => '10', 'length' => 5, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'movie_photos_FKIndex1' => array('column' => 'movie_id', 'unique' => 0),
			'movie_id' => array('column' => 'movie_id', 'unique' => 0),
			'movie_id_2' => array('column' => array('movie_id', 'photo_url'), 'unique' => 0),
			'sort_order' => array('column' => 'sort_order', 'unique' => 0)
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
			'name' => 'Lorem ipsum dolor sit amet',
			'photo_url' => 'Lorem ipsum dolor sit amet',
			'sort_order' => 1,
			'created' => '2013-06-24 13:08:21'
		),
	);

}
