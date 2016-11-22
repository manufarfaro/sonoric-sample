<?php
App::uses('AppController', 'Controller');
/**
 * Shows Controller
 *
 * @property Show $Show
 */
class ShowsController extends AppController {

public function beforeFilter() {
	parent::beforeFilter();
	$this->Auth->allow('index');
}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Show->recursive = 0;
		$sOptions = array(
			'conditions' => array('Show.event_date >= NOW()' ),
			'order' => array('Show.event_date', 'Show.event_date DESC')
		);
		$arrData = array(
			'shows' => $this->Show->find('all', $sOptions)
		);
		$this->set($arrData);
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Show->recursive = 0;
		$this->set('shows', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Show->exists($id)) {
			throw new NotFoundException(__('Invalid show'));
		}
		$options = array('conditions' => array('Show.' . $this->Show->primaryKey => $id));
		$this->set('show', $this->Show->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Show->create();
			if ($this->Show->save($this->request->data)) {
				$this->Session->setFlash(__('The show has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The show could not be saved. Please, try again.'));
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
		if (!$this->Show->exists($id)) {
			throw new NotFoundException(__('Invalid show'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Show->save($this->request->data)) {
				$this->Session->setFlash(__('The show has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The show could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Show.' . $this->Show->primaryKey => $id));
			$this->request->data = $this->Show->find('first', $options);
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
		if (!$this->Show->exists($id)) {
			throw new NotFoundException(__('Invalid show'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Show->save($this->request->data)) {
				$this->Session->setFlash(__('The show has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The show could not be saved. Please, try again.'));
			}
		}
		$options = array('conditions' => array('Show.' . $this->Show->primaryKey => $id));
		$this->request->data = $this->Show->find('first', $options);
		$arrData = array(
			'show' => $this->Show->find('first', $options)
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
		$this->Show->id = $id;
		if (!$this->Show->exists()) {
			throw new NotFoundException(__('Invalid show'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Show->delete()) {
			$this->Session->setFlash(__('Show deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Show was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
