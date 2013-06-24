<?php
App::uses('AppModel', 'Model');
/**
 * Showtime Model
 *
 * @property CinemasMovie $CinemasMovie
 * @property Movie $Movie
 * @property Cinema $Cinema
 */
class Showtime extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'CinemasMovie' => array(
			'className' => 'CinemasMovie',
			'foreignKey' => 'cinemas_movie_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
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
}
