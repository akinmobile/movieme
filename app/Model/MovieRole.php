<?php
App::uses('AppModel', 'Model');
/**
 * MovieRole Model
 *
 * @property MoviesParticipant $MoviesParticipant
 */
class MovieRole extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'MoviesParticipant' => array(
			'className' => 'MoviesParticipant',
			'foreignKey' => 'movie_role_id',
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
