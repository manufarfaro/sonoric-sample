<?php
App::uses('AppController', 'Controller');
/**
 * BandPhotos Controller
 *
 * @property BandPhoto $BandPhoto
 */
class BandPhotosController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->BandPhoto->recursive = 0;
		$this->set('bandPhotos', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->BandPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid band photo'));
		}
		$options = array('conditions' => array('BandPhoto.' . $this->BandPhoto->primaryKey => $id));
		$this->set('bandPhoto', $this->BandPhoto->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add($band_id = null) {

		if(is_numeric($band_id)){

			$ctOptions = array('conditions' => 'Band.id = '.$band_id);
			$bands = $this->BandPhoto->Band->find('first', $ctOptions);
			if (count($bands) < 1) {
				throw new NotFoundException(__('Invalid Band Track'));
			}
		}else{
			$this->redirect(array('controller' => 'Bands','action' => 'index'));
		}

		if ($this->request->is('post')) {
			$this->BandPhoto->create();
			if ($this->BandPhoto->save($this->request->data)) {
				$this->Session->setFlash(__('The band photo has been saved'));
				$this->redirect(array('controller' => 'Bands','action' => 'view', $band_id));
			} else {
				$this->Session->setFlash(__('The band photo could not be saved. Please, try again.'));
			}
		}
		//$bands = $this->BandPhoto->Band->find('list');
		$this->set(compact('bands'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->BandPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid band photo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BandPhoto->save($this->request->data)) {
				$this->Session->setFlash(__('The band photo has been saved'));
				$this->redirect(array('controller' => 'Bands','action' => 'view', $this->request->data['BandPhoto']['band_id']));
			} else {
				$this->Session->setFlash(__('The band photo could not be saved. Please, try again.'));
			}
		} else {

			$options = array('conditions' => array('BandPhoto.' . $this->BandPhoto->primaryKey => $id));
			$this->request->data = $this->BandPhoto->find('first', $options);
		}
		$bands = $this->BandPhoto->Band->find('list');
		$this->set(compact('bands'));
	}

/**
 * admin_change_image method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_change_image($id = null) {
		if (!$this->BandPhoto->exists($id)) {
			throw new NotFoundException(__('Invalid band photo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BandPhoto->save($this->request->data)) {
				$this->Session->setFlash(__('The band photo has been saved'));
				$this->redirect(array('controller' => 'Bands','action' => 'view', $this->request->data['BandPhoto']['band_id']));
			} else {
				$this->Session->setFlash(__('The band photo could not be saved. Please, try again.'));
			}
		}
		
		$options = array('conditions' => array('BandPhoto.' . $this->BandPhoto->primaryKey => $id));
		$this->request->data = $this->BandPhoto->find('first', $options);

		$arrData = array(
			'bands' => $this->BandPhoto->Band->find('list'),
			'bandPhoto' => $this->BandPhoto->find('first', $options)
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
		$this->BandPhoto->id = $id;
		$BandPhotos = $this->BandPhoto->find('first');
		if (!$this->BandPhoto->exists()) {
			throw new NotFoundException(__('Invalid band photo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BandPhoto->delete()) {
			$this->Session->setFlash(__('Band photo deleted'));
			$this->redirect(array('controller' => 'Bands','action' => 'view', $BandPhotos['BandPhoto']['band_id']));
		}
		$this->Session->setFlash(__('Band photo was not deleted'));
		$this->redirect(array('controller' => 'Bands','action' => 'view', $BandPhotos['BandPhoto']['band_id']));
	}
}
