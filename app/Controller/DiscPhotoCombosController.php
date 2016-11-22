<?php
App::uses('AppController', 'Controller');
/**
 * DiscPhotoCombos Controller
 *
 * @property DiscPhotoCombo $DiscPhotoCombo
 */
class DiscPhotoCombosController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->DiscPhotoCombo->recursive = 0;
		$this->set('discPhotoCombos', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->DiscPhotoCombo->exists($id)) {
			throw new NotFoundException(__('Invalid disc photo combo'));
		}
		$options = array('conditions' => array('DiscPhotoCombo.' . $this->DiscPhotoCombo->primaryKey => $id));
		$this->set('discPhotoCombo', $this->DiscPhotoCombo->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->DiscPhotoCombo->create();
			if ($this->DiscPhotoCombo->save($this->request->data)) {
				$this->Session->setFlash(__('The disc photo combo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disc photo combo could not be saved. Please, try again.'));
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
		if (!$this->DiscPhotoCombo->exists($id)) {
			throw new NotFoundException(__('Invalid disc photo combo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DiscPhotoCombo->save($this->request->data)) {
				$this->Session->setFlash(__('The disc photo combo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disc photo combo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DiscPhotoCombo.' . $this->DiscPhotoCombo->primaryKey => $id));
			$this->request->data = $this->DiscPhotoCombo->find('first', $options);
		}
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
		$this->DiscPhotoCombo->id = $id;
		if (!$this->DiscPhotoCombo->exists()) {
			throw new NotFoundException(__('Invalid disc photo combo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DiscPhotoCombo->delete()) {
			$this->Session->setFlash(__('Disc photo combo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Disc photo combo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
