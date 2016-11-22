<?php
App::uses('AppController', 'Controller');
/**
 * IndexNotices Controller
 *
 * @property IndexNotice $IndexNotice
 */
class IndexNoticesController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->IndexNotice->recursive = 0;
		$this->set('indexNotices', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->IndexNotice->exists($id)) {
			throw new NotFoundException(__('Invalid index notice'));
		}
		$options = array('conditions' => array('IndexNotice.' . $this->IndexNotice->primaryKey => $id));
		$this->set('indexNotice', $this->IndexNotice->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->IndexNotice->create();
			if ($this->IndexNotice->save($this->request->data)) {
				$this->Session->setFlash(__('The index notice has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The index notice could not be saved. Please, try again.'));
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
		if (!$this->IndexNotice->exists($id)) {
			throw new NotFoundException(__('Invalid index notice'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->IndexNotice->save($this->request->data)) {
				$this->Session->setFlash(__('The index notice has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The index notice could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('IndexNotice.' . $this->IndexNotice->primaryKey => $id));
			$this->request->data = $this->IndexNotice->find('first', $options);
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
		if (!$this->IndexNotice->exists($id)) {
			throw new NotFoundException(__('Invalid index notice'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->IndexNotice->save($this->request->data)) {
				$this->Session->setFlash(__('The index notice has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The index notice could not be saved. Please, try again.'));
			}
		}
		$options = array('conditions' => array('IndexNotice.' . $this->IndexNotice->primaryKey => $id));
		$this->request->data = $this->IndexNotice->find('first', $options);
		$arrData = array(
			'indexNotice' => $this->IndexNotice->find('first', $options)
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
		$this->IndexNotice->id = $id;
		
		if (!$this->IndexNotice->exists()) {
			throw new NotFoundException(__('Invalid index notice'));
		}
		$this->request->onlyAllow('post', 'delete');
		
		if ($this->IndexNotice->delete()) {
			$this->Session->setFlash(__('Index notice deleted'));
		}else{
			$this->Session->setFlash(__('Index notice was not deleted'));
		}
		$this->redirect(array('controller' => 'indexNotices','action' => 'index'));
	}
}
