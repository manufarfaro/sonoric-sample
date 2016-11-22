<?php
App::uses('AppController', 'Controller');
/**
 * Hirings Controller
 *
 * @property Hiring $Hiring
 */
class HiringsController extends AppController {

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
		$id = 0;
		if (!$this->Hiring->exists($id)) {
			throw new NotFoundException(__('Invalid hiring'));
		}
		$options = array('conditions' => array('Hiring.' . $this->Hiring->primaryKey => $id));
		$this->set('hiring', $this->Hiring->find('first', $options));
	}

/**
 * admin_index method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_index() {
		$id = 0;
		if (!$this->Hiring->exists($id)) {
			throw new NotFoundException(__('Invalid hiring'));
		}
		$options = array('conditions' => array('Hiring.' . $this->Hiring->primaryKey => $id));
		$this->set('hiring', $this->Hiring->find('first', $options));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit() {
		$id = 0;
		if (!$this->Hiring->exists($id)) {
			throw new NotFoundException(__('Invalid hiring'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$data = $this->request->data;
			
			$sqlQuery = "UPDATE sonoricstudios.hiring SET text = '". $data['Hiring']['text'] ."' WHERE id = ". $data['Hiring']['id'];
			//if ($this->Hiring->save($this->request->data)) {
			$this->Hiring->query($sqlQuery);
			if($this->Hiring->query($sqlQuery)){

				$this->Session->setFlash(__('The hiring has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The hiring could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Hiring.' . $this->Hiring->primaryKey => $id));
			$this->request->data = $this->Hiring->find('first', $options);
		}
	}
}
