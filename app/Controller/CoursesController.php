<?php
App::uses('AppController', 'Controller');
/**
 * Courses Controller
 *
 * @property Course $Course
 */
class CoursesController extends AppController {

public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index');
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function index() {
		$this->Course->recursive = 2;
		$arrData = array(
			'courses' => $this->Course->find('all')
		);

		$this->set($arrData);
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Course->recursive = 0;
		$this->set('courses', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->loadmodel('CourseTeachers');
		if (!$this->Course->exists($id)) {
			throw new NotFoundException(__('Invalid course'));
		}

		$courseOptions = array(
			'conditions' => array(
				'Course.' . $this->Course->primaryKey => $id
			),
			'recursive' => 1
		);
		
		$courseData = $this->Course->find('first', $courseOptions);
/*
		foreach ($this->CourseTeachers->findAllByCourseId($id) as $key => $value) {
			array_push($courseData['teachers'],$value['CourseTeachers']);
		}
*/
		$this->set(
			'course', 
			$courseData
		);
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add($related = null) {
		if ($this->request->is('post')) {
			$this->Course->create();
			if ($this->Course->save($this->request->data)) {
				$this->Session->setFlash(__('The course has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Course->exists($id)) {
			throw new NotFoundException(__('Invalid course'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Course->save($this->request->data)) {
				$this->Session->setFlash(__('The course has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Course.' . $this->Course->primaryKey => $id));
			$this->request->data = $this->Course->find('first', $options);
		}
	}

/**
 * admin_change_image method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_change_image($id = null) {
		if (!$this->Course->exists($id)) {
			throw new NotFoundException(__('Invalid course'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Course->save($this->request->data)) {
				$this->Session->setFlash(__('The course has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course could not be saved. Please, try again.'));
			}
		}
		$options = array('conditions' => array('Course.' . $this->Course->primaryKey => $id));
		$this->request->data = $this->Course->find('first', $options);

		$arrData = array(
			'course' => $this->Course->find('first', $options)
		);

		$this->set($arrData);
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
		$this->Course->id = $id;
		if (!$this->Course->exists()) {
			throw new NotFoundException(__('Invalid course'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Course->delete()) {
			$this->Session->setFlash(__('Course deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Course was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
