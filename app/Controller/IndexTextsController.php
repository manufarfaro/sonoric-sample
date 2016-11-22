<?php
App::uses('AppController', 'Controller');
/**
 * IndexTexts Controller
 *
 * @property IndexText $IndexText
 */
class IndexTextsController extends AppController {

public function beforeFilter() {
	parent::beforeFilter();
}

/**
 * admin_index method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */

	public function admin_index() {
		$this->IndexText->recursive = 0;
		$id = 0;
		if (!$this->IndexText->exists($id)) {
			throw new NotFoundException(__('Invalid index text'));
		}
		$options = array('conditions' => array('IndexText.' . $this->IndexText->primaryKey => $id));
		$this->set('indexText', $this->IndexText->find('first', $options));
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
		if (!$this->IndexText->exists($id)) {
			throw new NotFoundException(__('Invalid index text'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$data = $this->request->data;
			
			$sqlQuery = "UPDATE sonoricstudios.index_text SET text = '". $data['IndexText']['text'] ."'" ;
			//if ($this->IndexText->save($this->request->data)) {
			$this->IndexText->query($sqlQuery);
			if($this->IndexText->query($sqlQuery)){

				$this->Session->setFlash(__('The index text has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The index text could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('IndexText.' . $this->IndexText->primaryKey => $id));
			$this->request->data = $this->IndexText->find('first', $options);
		}
	}
}
