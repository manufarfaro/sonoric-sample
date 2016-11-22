<?php
App::uses('CourseTeacher', 'Model');

/**
 * CourseTeacher Test Case
 *
 */
class CourseTeacherTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.course_teacher',
		'app.course',
		'app.course_teachers'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CourseTeacher = ClassRegistry::init('CourseTeacher');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CourseTeacher);

		parent::tearDown();
	}

}
