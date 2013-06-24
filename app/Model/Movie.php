<?php
App::uses('AppModel', 'Model');
/**
 * Movie Model
 *
 * @property ContentRating $ContentRating
 * @property MoviePhoto $MoviePhoto
 * @property MovieTrailer $MovieTrailer
 * @property Showtime $Showtime
 * @property UserReview $UserReview
 * @property Cinema $Cinema
 * @property Genre $Genre
 * @property Language $Language
 * @property Participant $Participant
 */
class Movie extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'ContentRating' => array(
			'className' => 'ContentRating',
			'foreignKey' => 'content_rating_id',
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
		'MoviePhoto' => array(
			'className' => 'MoviePhoto',
			'foreignKey' => 'movie_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'MovieTrailer' => array(
			'className' => 'MovieTrailer',
			'foreignKey' => 'movie_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Showtime' => array(
			'className' => 'Showtime',
			'foreignKey' => 'movie_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'UserReview' => array(
			'className' => 'UserReview',
			'foreignKey' => 'movie_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Cinema' => array(
			'className' => 'Cinema',
			'joinTable' => 'cinemas_movies',
			'foreignKey' => 'movie_id',
			'associationForeignKey' => 'cinema_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Genre' => array(
			'className' => 'Genre',
			'joinTable' => 'movies_genres',
			'foreignKey' => 'movie_id',
			'associationForeignKey' => 'genre_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Language' => array(
			'className' => 'Language',
			'joinTable' => 'movies_languages',
			'foreignKey' => 'movie_id',
			'associationForeignKey' => 'language_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Participant' => array(
			'className' => 'Participant',
			'joinTable' => 'movies_participants',
			'foreignKey' => 'movie_id',
			'associationForeignKey' => 'participant_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
