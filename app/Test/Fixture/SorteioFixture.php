<?php
/**
 * Sorteio Fixture
 */
class SorteioFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'sorteio';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'date' => array('type' => 'date', 'null' => false, 'default' => null),
		'number' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'create' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'date' => '2017-10-11',
			'number' => 1,
			'create' => 1507729115
		),
	);

}
