<?php
App::uses('Type', 'Model');

/**
 * Type Test Case
 *
 */
class TypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.type',
		'app.field',
		'app.response',
		'app.form',
		'app.forms_field',
		'app.group',
		'app.forms_group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Type = ClassRegistry::init('Type');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Type);

		parent::tearDown();
	}

}
