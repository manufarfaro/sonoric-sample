<?php
App::uses('AppController', 'Controller');
/**
 * Clinics Controller
 *
 * @property Clinic $Clinic
 */
class ClinicsController extends AppController {

public function beforeFilter() {
	parent::beforeFilter();
	$this->Auth->allow('index');
}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Clinic->recursive = 0;
		$arrData = array(
			'clinics' => $this->Clinic->find('all')
		);
		$this->set($arrData);
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Clinic->recursive = 0;
		$this->set('clinics', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Clinic->exists($id)) {
			throw new NotFoundException(__('Invalid clinic'));
		}
		$options = array('conditions' => array('Clinic.' . $this->Clinic->primaryKey => $id));
		$this->set('clinic', $this->Clinic->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Clinic->create();
			if ($this->Clinic->save($this->request->data)) {
				$this->Session->setFlash(__('The clinic has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clinic could not be saved. Please, try again.'));
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
		if (!$this->Clinic->exists($id)) {
			throw new NotFoundException(__('Invalid clinic'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Clinic->save($this->request->data)) {
				$this->Session->setFlash(__('The clinic has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clinic could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Clinic.' . $this->Clinic->primaryKey => $id));
			$this->request->data = $this->Clinic->find('first', $options);
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
		if (!$this->Clinic->exists($id)) {
			throw new NotFoundException(__('Invalid clinic'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Clinic->save($this->request->data)) {
				$this->Session->setFlash(__('The clinic has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clinic could not be saved. Please, try again.'));
			}
		}
		$options = array('conditions' => array('Clinic.' . $this->Clinic->primaryKey => $id));
		$this->request->data = $this->Clinic->find('first', $options);
		
		$arrData = array(
			'clinic' => $this->Clinic->find('first', $options)
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
		$this->Clinic->id = $id;
		if (!$this->Clinic->exists()) {
			throw new NotFoundException(__('Invalid clinic'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Clinic->delete()) {
			$this->Session->setFlash(__('Clinic deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Clinic was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
