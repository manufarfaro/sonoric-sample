<?php
App::uses('AppController', 'Controller');
/**
 * DiscPrintingPhotos Controller
 *
 * @property DiscPrintingPhoto $DiscPrintingPhoto
 */
class DiscPrintingPhotosController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->DiscPrintingPhoto->recursive = 0;
		$this->set('discPrintingPhotos', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->DiscPrintingPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid disc printing photo'));
		}
		$options = array('conditions' => array('DiscPrintingPhoto.' . $this->DiscPrintingPhoto->primaryKey => $id));
		$this->set('discPrintingPhoto', $this->DiscPrintingPhoto->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->DiscPrintingPhoto->create();
			if ($this->DiscPrintingPhoto->save($this->request->data)) {
				$this->Session->setFlash(__('The disc printing photo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disc printing photo could not be saved. Please, try again.'));
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
		if (!$this->DiscPrintingPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid disc printing photo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DiscPrintingPhoto->save($this->request->data)) {
				$this->Session->setFlash(__('The disc printing photo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disc printing photo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DiscPrintingPhoto.' . $this->DiscPrintingPhoto->primaryKey => $id));
			$this->request->data = $this->DiscPrintingPhoto->find('first', $options);
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
		if (!$this->DiscPrintingPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid disc printing photo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DiscPrintingPhoto->save($this->request->data)) {
				$this->Session->setFlash(__('The disc printing photo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disc printing photo could not be saved. Please, try again.'));
			}
		}
		$options = array('conditions' => array('DiscPrintingPhoto.' . $this->DiscPrintingPhoto->primaryKey => $id));
		$this->request->data = $this->DiscPrintingPhoto->find('first', $options);
		$arrData = array(
			'discPrintingPhoto' => $this->DiscPrintingPhoto->find('first', $options)
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
		$this->DiscPrintingPhoto->id = $id;
		if (!$this->DiscPrintingPhoto->exists()) {
			throw new NotFoundException(__('Invalid disc printing photo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DiscPrintingPhoto->delete()) {
			$this->Session->setFlash(__('Disc printing photo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Disc printing photo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
