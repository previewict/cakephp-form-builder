<?php
App::uses('FormsField', 'Model');

/**
 * FormsField Test Case
 *
 */
class FormsFieldTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.forms_field',
		'app.field',
		'app.type',
		'app.response',
		'app.form',
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
		$this->FormsField = ClassRegistry::init('FormsField');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FormsField);

		parent::tearDown();
	}

}
