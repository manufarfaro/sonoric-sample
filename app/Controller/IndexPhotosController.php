<?php
App::uses('AppController', 'Controller');
/**
 * IndexPhotos Controller
 *
 * @property IndexPhoto $IndexPhoto
 */
class IndexPhotosController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->IndexPhoto->recursive = 0;
		$this->set('indexPhotos', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->IndexPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid index photo'));
		}
		$options = array('conditions' => array('IndexPhoto.' . $this->IndexPhoto->primaryKey => $id));
		$this->set('indexPhoto', $this->IndexPhoto->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->IndexPhoto->create();
			if ($this->IndexPhoto->save($this->request->data)) {
				$this->Session->setFlash(__('The index photo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The index photo could not be saved. Please, try again.'));
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
		if (!$this->IndexPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid index photo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->IndexPhoto->save($this->request->data)) {
				$this->Session->setFlash(__('The index photo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The index photo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('IndexPhoto.' . $this->IndexPhoto->primaryKey => $id));
			$this->request->data = $this->IndexPhoto->find('first', $options);
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
		if (!$this->IndexPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid index photo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->IndexPhoto->save($this->request->data)) {
				$this->Session->setFlash(__('The index photo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The index photo could not be saved. Please, try again.'));
			}
		}
		$options = array('conditions' => array('IndexPhoto.' . $this->IndexPhoto->primaryKey => $id));
		$this->request->data = $this->IndexPhoto->find('first', $options);
		$arrData = array(
			'indexPhoto' => $this->IndexPhoto->find('first', $options)
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
		$this->IndexPhoto->id = $id;
		if (!$this->IndexPhoto->exists()) {
			throw new NotFoundException(__('Invalid index photo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->IndexPhoto->delete()) {
			$this->Session->setFlash(__('Index photo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Index photo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
