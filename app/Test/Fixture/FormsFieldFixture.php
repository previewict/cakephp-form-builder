<?php
/**
 * FormsFieldFixture
 *
 */
class FormsFieldFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => false, 'key' => 'primary'),
		'field_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 7, 'unsigned' => false, 'key' => 'index'),
		'form_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 6, 'unsigned' => false, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'field_id' => array('column' => 'field_id', 'unique' => 0),
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
			'field_id' => 1,
			'form_id' => 1,
			'created' => '2014-09-30 03:36:13',
			'modified' => '2014-09-30 03:36:13'
		),
	);

}
