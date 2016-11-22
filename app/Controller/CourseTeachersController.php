<?php
App::uses('AppController', 'Controller');
/**
 * CourseTeachers Controller
 *
 * @property CourseTeacher $CourseTeacher
 */
class CourseTeachersController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CourseTeacher->recursive = 0;
		$this->set('courseTeachers', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CourseTeacher->exists($id)) {
			throw new NotFoundException(__('Invalid course teacher'));
		}
		$options = array('conditions' => array('CourseTeacher.' . $this->CourseTeacher->primaryKey => $id));
		$this->set('courseTeacher', $this->CourseTeacher->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add($course_id = null) {
		
		if(is_numeric($course_id)){

			$ctOptions = array('conditions' => 'Course.id = '.$course_id);
			$courses = $this->CourseTeacher->Course->find('first', $ctOptions);
			if (count($courses) < 1) {
				throw new NotFoundException(__('Invalid course teacher'));
			}
		}else{
			$this->redirect(array('controller' => 'Courses','action' => 'index'));
		}

		if ($this->request->is('post')) {

			$this->CourseTeacher->create();
			if ($this->CourseTeacher->save($this->request->data)) {
				$this->Session->setFlash(__('The course teacher has been saved'));
				$this->redirect(array('controller' => 'Courses','action' => 'view', $course_id));

			} else {
				$this->Session->setFlash(__('The course teacher could not be saved. Please, try again.'));
			}
		}
		//$courses = $this->CourseTeacher->Course->find('list');
		$this->set(compact('courses'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->CourseTeacher->exists($id)) {
			throw new NotFoundException(__('Invalid course teacher'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CourseTeacher->save($this->request->data)) {
				$this->Session->setFlash(__('The course teacher has been saved'));
				$this->redirect(array('controller' => 'Courses','action' => 'view', $this->request->data['CourseTeacher']['course_id']));
			} else {
				$this->Session->setFlash(__('The course teacher could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CourseTeacher.' . $this->CourseTeacher->primaryKey => $id));
			$this->request->data = $this->CourseTeacher->find('first', $options);
		}

		$ctOptions = array(
			'conditions' => 'CourseTeacher.id = '. $id
		);
		
		//$courses = $this->CourseTeacher->Course->find('first', $ctOptions);
		$courses = $this->CourseTeacher->find('first',$ctOptions);
		$this->set(compact('courses'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->CourseTeacher->id = $id;
		$CourseTeacher = $this->CourseTeacher->find('first');
		if (!$this->CourseTeacher->exists()) {
			throw new NotFoundException(__('Invalid course teacher'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CourseTeacher->delete()) {
			$this->Session->setFlash(__('Course teacher deleted'));
			$this->redirect(array('controller' => 'Courses','action' => 'view', $CourseTeacher['Course']['id']));

		}
		$this->Session->setFlash(__('Course teacher was not deleted'));
		$this->redirect(array('controller' => 'Courses','action' => 'view', $CourseTeacher['Course']['id']));
	}
}
