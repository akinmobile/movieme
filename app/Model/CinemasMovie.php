<?php
App::uses('AppModel', 'Model');
/**
 * CinemasMovie Model
 *
 * @property Movie $Movie
 * @property Cinema $Cinema
 * @property Showtime $Showtime
 */
class CinemasMovie extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'movie_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Movie' => array(
			'className' => 'Movie',
			'foreignKey' => 'movie_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cinema' => array(
			'className' => 'Cinema',
			'foreignKey' => 'cinema_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Showtime' => array(
			'className' => 'Showtime',
			'foreignKey' => 'cinemas_movie_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
