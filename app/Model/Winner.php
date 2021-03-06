<?php
App::uses('AppModel', 'Model');
/**
 * Winner Model
 *
 * @property Sorteio $Sorteio
 * @property Participant $Participant
 */
class Winner extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'winner';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'sorteio_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'participant_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Sorteio' => array(
			'className' => 'Sorteio',
			'foreignKey' => 'sorteio_id',
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
