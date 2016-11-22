<?php
App::uses('AppController', 'Controller');
/**
 * VideoclipCombos Controller
 *
 * @property VideoclipCombo $VideoclipCombo
 */
class VideoclipCombosController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->VideoclipCombo->recursive = 0;
		$this->set('videoclipCombos', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->VideoclipCombo->exists($id)) {
			throw new NotFoundException(__('Invalid videoclip combo'));
		}
		$options = array('conditions' => array('VideoclipCombo.' . $this->VideoclipCombo->primaryKey => $id));
		$this->set('videoclipCombo', $this->VideoclipCombo->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->VideoclipCombo->create();
			if ($this->VideoclipCombo->save($this->request->data)) {
				$this->Session->setFlash(__('The videoclip combo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The videoclip combo could not be saved. Please, try again.'));
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
		if (!$this->VideoclipCombo->exists($id)) {
			throw new NotFoundException(__('Invalid videoclip combo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->VideoclipCombo->save($this->request->data)) {
				$this->Session->setFlash(__('The videoclip combo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The videoclip combo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('VideoclipCombo.' . $this->VideoclipCombo->primaryKey => $id));
			$this->request->data = $this->VideoclipCombo->find('first', $options);
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
		$this->VideoclipCombo->id = $id;
		if (!$this->VideoclipCombo->exists()) {
			throw new NotFoundException(__('Invalid videoclip combo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->VideoclipCombo->delete()) {
			$this->Session->setFlash(__('Videoclip combo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Videoclip combo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
