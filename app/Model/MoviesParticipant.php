<?php
App::uses('AppModel', 'Model');
/**
 * MoviesParticipant Model
 *
 * @property Movie $Movie
 * @property MovieRole $MovieRole
 * @property Participant $Participant
 */
class MoviesParticipant extends AppModel {


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
		'MovieRole' => array(
			'className' => 'MovieRole',
			'foreignKey' => 'movie_role_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Participant' => array(
			'className' => 'Participant',
			'foreignKey' => 'participant_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
