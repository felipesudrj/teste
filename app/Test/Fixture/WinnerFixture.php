<?php
/**
 * Winner Fixture
 */
class WinnerFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'winner';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'sorteio_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'participant_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_sorteio_id' => array('column' => 'sorteio_id', 'unique' => 0),
			'fk_participant_id' => array('column' => 'participant_id', 'unique' => 0)
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
			'sorteio_id' => 1,
			'participant_id' => 1
		),
	);

}
