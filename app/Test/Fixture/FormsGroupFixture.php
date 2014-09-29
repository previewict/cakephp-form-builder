<?php
/**
 * FormsGroupFixture
 *
 */
class FormsGroupFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => false, 'key' => 'primary'),
		'form_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6, 'unsigned' => false, 'key' => 'index'),
		'group_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => false, 'key' => 'index'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5, 'unsigned' => false, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'group_id' => array('column' => 'group_id', 'unique' => 0),
			'user_id' => array('column' => 'user_id', 'unique' => 0),
			'form_id' => array('column' => 'form_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'form_id' => 1,
			'group_id' => 1,
			'user_id' => 1,
			'created' => '2014-09-30 03:37:00',
			'modified' => '2014-09-30 03:37:00'
		),
	);

}
