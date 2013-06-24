<?php
App::uses('AppModel', 'Model');
/**
 * MovieTrailer Model
 *
 * @property Movie $Movie
 */
class MovieTrailer extends AppModel {


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
		)
	);
}
