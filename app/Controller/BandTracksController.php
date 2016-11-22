<?php
App::uses('AppController', 'Controller');
/**
 * BandTracks Controller
 *
 * @property BandTrack $BandTrack
 */
class BandTracksController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->BandTrack->recursive = 0;
		$this->set('bandTracks', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->BandTrack->exists($id)) {
			throw new NotFoundException(__('Invalid band track'));
		}
		$options = array('conditions' => array('BandTrack.' . $this->BandTrack->primaryKey => $id));
		$this->set('bandTrack', $this->BandTrack->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add($band_id = null) {

		if(is_numeric($band_id)){

			$ctOptions = array('conditions' => 'Band.id = '.$band_id);
			$bands = $this->BandTrack->Band->find('first', $ctOptions);
			if (count($bands) < 1) {
				throw new NotFoundException(__('Invalid Band Track'));
			}
		}else{
			$this->redirect(array('controller' => 'Bands','action' => 'index'));
		}

		if ($this->request->is('post')) {
			$this->BandTrack->create();
			if ($this->BandTrack->save($this->request->data)) {
				$this->Session->setFlash(__('The band track has been saved'));
				$this->redirect(array('controller' => 'Bands','action' => 'view', $band_id));
			} else {
				$this->Session->setFlash(__('The band track could not be saved. Please, try again.'));
			}
		}
		//$bands = $this->BandTrack->Band->find('list');
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
		if (!$this->BandTrack->exists($id)) {
			throw new NotFoundException(__('Invalid band track'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BandTrack->save($this->request->data)) {
				$this->Session->setFlash(__('The band track has been saved'));
				$this->redirect(array('controller' => 'Bands','action' => 'view', $this->request->data['BandTrack']['band_id']));
			} else {
				$this->Session->setFlash(__('The band track could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BandTrack.' . $this->BandTrack->primaryKey => $id));
			$this->request->data = $this->BandTrack->find('first', $options);
		}
		$bands = $this->BandTrack->Band->find('list');
		$this->set(compact('bands'));
	}

	/**
 * admin_change_file_track method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_change_file_track($id = null) {
		if (!$this->BandTrack->exists($id)) {
			throw new NotFoundException(__('Invalid band track'));
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BandTrack->save($this->request->data)) {
				$this->Session->setFlash(__('The band track has been saved'));
				$this->redirect(array('controller' => 'Bands','action' => 'view', $this->request->data['BandTrack']['band_id']));
			} else {
				$this->Session->setFlash(__('The band track could not be saved. Please, try again.'));
			}
		}

		$options = array('conditions' => array('BandTrack.' . $this->BandTrack->primaryKey => $id));

		$arrData = array(
			'bands' => $this->BandTrack->Band->find('list'),
			'bandTrack' => $this->BandTrack->find('first', $options)
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
		$this->BandTrack->id = $id;
		$bandTrackOptions = array('conditions' => 'BandTrack.id = '.$id);

		$BandTracks = $this->BandTrack->find('first',$bandTrackOptions);
		if (!$this->BandTrack->exists()) {
			throw new NotFoundException(__('Invalid band track'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BandTrack->delete()) {
			$this->Session->setFlash(__('Band track deleted'));
			$this->redirect(array('controller' => 'Bands','action' => 'view', $BandTracks['BandTrack']['band_id']));
		}
		$this->Session->setFlash(__('Band track was not deleted'));
		$this->redirect(array('controller' => 'Bands','action' => 'view', $BandTracks['BandTrack']['band_id']));
	}
}
