<?php
App::uses('FormsGroup', 'Model');

/**
 * FormsGroup Test Case
 *
 */
class FormsGroupTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.forms_group',
		'app.form',
		'app.field',
		'app.type',
		'app.response',
		'app.forms_field',
		'app.group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FormsGroup = ClassRegistry::init('FormsGroup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FormsGroup);

		parent::tearDown();
	}

}
