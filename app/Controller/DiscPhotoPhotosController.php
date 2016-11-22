<?php
App::uses('AppController', 'Controller');
/**
 * DiscPhotoPhotos Controller
 *
 * @property DiscPhotoPhoto $DiscPhotoPhoto
 */
class DiscPhotoPhotosController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->DiscPhotoPhoto->recursive = 0;
		$this->set('discPhotoPhotos', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->DiscPhotoPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid disc photo photo'));
		}
		$options = array('conditions' => array('DiscPhotoPhoto.' . $this->DiscPhotoPhoto->primaryKey => $id));
		$this->set('discPhotoPhoto', $this->DiscPhotoPhoto->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->DiscPhotoPhoto->create();
			if ($this->DiscPhotoPhoto->save($this->request->data)) {
				$this->Session->setFlash(__('The disc photo photo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disc photo photo could not be saved. Please, try again.'));
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
		if (!$this->DiscPhotoPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid disc photo photo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DiscPhotoPhoto->save($this->request->data)) {
				$this->Session->setFlash(__('The disc photo photo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disc photo photo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DiscPhotoPhoto.' . $this->DiscPhotoPhoto->primaryKey => $id));
			$this->request->data = $this->DiscPhotoPhoto->find('first', $options);
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
		if (!$this->DiscPhotoPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid disc photo photo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DiscPhotoPhoto->save($this->request->data)) {
				$this->Session->setFlash(__('The disc photo photo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disc photo photo could not be saved. Please, try again.'));
			}
		}
		$options = array('conditions' => array('DiscPhotoPhoto.' . $this->DiscPhotoPhoto->primaryKey => $id));
		$this->request->data = $this->DiscPhotoPhoto->find('first', $options);
		$arrData = array(
			'discPhotoPhoto' => $this->DiscPhotoPhoto->find('first', $options)
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
		$this->DiscPhotoPhoto->id = $id;
		if (!$this->DiscPhotoPhoto->exists()) {
			throw new NotFoundException(__('Invalid disc photo photo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DiscPhotoPhoto->delete()) {
			$this->Session->setFlash(__('Disc photo photo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Disc photo photo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
