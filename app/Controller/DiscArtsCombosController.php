<?php
App::uses('AppController', 'Controller');
/**
 * DiscArtsCombos Controller
 *
 * @property DiscArtsCombo $DiscArtsCombo
 */
class DiscArtsCombosController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->DiscArtsCombo->recursive = 0;
		$this->set('discArtsCombos', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->DiscArtsCombo->exists($id)) {
			throw new NotFoundException(__('Invalid disc arts combo'));
		}
		$options = array('conditions' => array('DiscArtsCombo.' . $this->DiscArtsCombo->primaryKey => $id));
		$this->set('discArtsCombo', $this->DiscArtsCombo->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->DiscArtsCombo->create();
			if ($this->DiscArtsCombo->save($this->request->data)) {
				$this->Session->setFlash(__('The disc arts combo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disc arts combo could not be saved. Please, try again.'));
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
		if (!$this->DiscArtsCombo->exists($id)) {
			throw new NotFoundException(__('Invalid disc arts combo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DiscArtsCombo->save($this->request->data)) {
				$this->Session->setFlash(__('The disc arts combo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disc arts combo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DiscArtsCombo.' . $this->DiscArtsCombo->primaryKey => $id));
			$this->request->data = $this->DiscArtsCombo->find('first', $options);
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
		$this->DiscArtsCombo->id = $id;
		if (!$this->DiscArtsCombo->exists()) {
			throw new NotFoundException(__('Invalid disc arts combo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DiscArtsCombo->delete()) {
			$this->Session->setFlash(__('Disc arts combo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Disc arts combo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
