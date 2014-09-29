<?php
App::uses('Response', 'Model');

/**
 * Response Test Case
 *
 */
class ResponseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.response',
		'app.field',
		'app.type',
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
		$this->Response = ClassRegistry::init('Response');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Response);

		parent::tearDown();
	}

}
