<?php
App::uses('AppController', 'Controller');
/**
 * Studios Controller
 *
 * @property Studio $Studio
 */
class StudiosController extends AppController {

public function beforeFilter() {
	parent::beforeFilter();
	$this->Auth->allow('index');
}


/**
 * index method
 *
 * @return void
 */
	public function index(){
		$this->Studio->recursive = 0;
		$id = 0;
		if (!$this->Studio->exists($id)) {
			throw new NotFoundException(__('Invalid studio'));
		}
		$options = array('conditions' => array('Studio.' . $this->Studio->primaryKey => $id));
		$this->set('studio', $this->Studio->find('first', $options));
	}

/**
 * Admin index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Studio->recursive = 0;
		$id = 0;
		if (!$this->Studio->exists($id)) {
			throw new NotFoundException(__('Invalid studio'));
		}
		$options = array('conditions' => array('Studio.' . $this->Studio->primaryKey => $id));
		$this->set('studio', $this->Studio->find('first', $options));
	}

/**
 * Admin edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit() {
		$id = 0;

		if (!$this->Studio->exists($id)) {
			throw new NotFoundException(__('Invalid studio'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$data = $this->request->data;

			$sqlQuery = "UPDATE sonoricstudios.studio SET about = '". $data['Studio']['about'] ."'" ;
			//if ($this->Studio->save($this->request->data)) {
			$this->Studio->query($sqlQuery);
			if($this->Studio->query($sqlQuery)){
				$this->Session->setFlash(__('The studio has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The studio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Studio.' . $this->Studio->primaryKey => $id));
			$this->request->data = $this->Studio->find('first', $options);
		}
	}

}
