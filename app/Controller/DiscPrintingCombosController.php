<?php
App::uses('AppController', 'Controller');
/**
 * DiscPrintingCombos Controller
 *
 * @property DiscPrintingCombo $DiscPrintingCombo
 */
class DiscPrintingCombosController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->DiscPrintingCombo->recursive = 0;
		$this->set('discPrintingCombos', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->DiscPrintingCombo->exists($id)) {
			throw new NotFoundException(__('Invalid disc printing combo'));
		}
		$options = array('conditions' => array('DiscPrintingCombo.' . $this->DiscPrintingCombo->primaryKey => $id));
		$this->set('discPrintingCombo', $this->DiscPrintingCombo->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->DiscPrintingCombo->create();
			if ($this->DiscPrintingCombo->save($this->request->data)) {
				$this->Session->setFlash(__('The disc printing combo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disc printing combo could not be saved. Please, try again.'));
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
		if (!$this->DiscPrintingCombo->exists($id)) {
			throw new NotFoundException(__('Invalid disc printing combo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DiscPrintingCombo->save($this->request->data)) {
				$this->Session->setFlash(__('The disc printing combo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disc printing combo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DiscPrintingCombo.' . $this->DiscPrintingCombo->primaryKey => $id));
			$this->request->data = $this->DiscPrintingCombo->find('first', $options);
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
		$this->DiscPrintingCombo->id = $id;
		if (!$this->DiscPrintingCombo->exists()) {
			throw new NotFoundException(__('Invalid disc printing combo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DiscPrintingCombo->delete()) {
			$this->Session->setFlash(__('Disc printing combo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Disc printing combo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
