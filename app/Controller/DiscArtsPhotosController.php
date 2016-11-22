<?php
App::uses('AppController', 'Controller');
/**
 * DiscArtsPhotos Controller
 *
 * @property DiscArtsPhoto $DiscArtsPhoto
 */
class DiscArtsPhotosController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->DiscArtsPhoto->recursive = 0;
		$this->set('discArtsPhotos', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->DiscArtsPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid disc arts photo'));
		}
		$options = array('conditions' => array('DiscArtsPhoto.' . $this->DiscArtsPhoto->primaryKey => $id));
		$this->set('discArtsPhoto', $this->DiscArtsPhoto->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->DiscArtsPhoto->create();
			if ($this->DiscArtsPhoto->save($this->request->data)) {
				$this->Session->setFlash(__('The disc arts photo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disc arts photo could not be saved. Please, try again.'));
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
		if (!$this->DiscArtsPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid disc arts photo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DiscArtsPhoto->save($this->request->data)) {
				$this->Session->setFlash(__('The disc arts photo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disc arts photo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DiscArtsPhoto.' . $this->DiscArtsPhoto->primaryKey => $id));
			$this->request->data = $this->DiscArtsPhoto->find('first', $options);
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
		if (!$this->DiscArtsPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid disc arts photo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DiscArtsPhoto->save($this->request->data)) {
				$this->Session->setFlash(__('The disc arts photo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disc arts photo could not be saved. Please, try again.'));
			}
		}
		$options = array('conditions' => array('DiscArtsPhoto.' . $this->DiscArtsPhoto->primaryKey => $id));
		$this->request->data = $this->DiscArtsPhoto->find('first', $options);

		$arrData = array(
			'discArtsPhoto' => $this->DiscArtsPhoto->find('first', $options)
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
		$this->DiscArtsPhoto->id = $id;
		if (!$this->DiscArtsPhoto->exists()) {
			throw new NotFoundException(__('Invalid disc arts photo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DiscArtsPhoto->delete()) {
			$this->Session->setFlash(__('Disc arts photo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Disc arts photo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
