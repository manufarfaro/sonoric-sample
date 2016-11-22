<?php
App::uses('AppController', 'Controller');
/**
 * Discs Controller
 *
 * @property Disc $Disc
 */
class DiscsController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('index', 'arts', 'printing', 'photos');
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function index() {
		$this->redirect(array('action' => 'arts'));
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_index($id = null) {
		$id = 0;
		if (!$this->Disc->exists($id)) {
			throw new NotFoundException(__('Invalid disc art'));
		}
		$options = array('conditions' => array('Disc.' . $this->Disc->primaryKey => $id));
		$this->set('Disc', $this->Disc->find('first', $options));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit() {
		$id = 0;
		if (!$this->Disc->exists($id)) {
			throw new NotFoundException(__('Invalid disc art'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {

			$data = $this->request->data;
			
			$sqlQuery = "UPDATE sonoricstudios.discs SET text_arts = '". $data['Disc']['text_arts'] ."',  text_printing = '". $data['Disc']['text_printing'] ."', text_photos = '". $data['Disc']['text_photos'] ."' WHERE id = ". $data['Disc']['id'] ;

			//if ($this->Disc->save($this->request->data)) {
			$this->Disc->query($sqlQuery);
			if($this->Disc->query($sqlQuery)){

				$this->Session->setFlash(__('The disc has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disc could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Disc.' . $this->Disc->primaryKey => $id));
			$this->request->data = $this->Disc->find('first', $options);
		}
	}

	public function arts(){
		$this->loadModel('DiscArtsCombos');
		$this->loadModel('DiscArtsPhotos');


		$arrData = array(
			'Discs' => $this->Disc->find('first'),
			'DiscArtsCombos' => $this->DiscArtsCombos->find('all'),
			'DiscArtsPhotos' => $this->DiscArtsPhotos->find('all')
		);
		$this->set($arrData);
	}

	public function printing(){
		$this->loadModel('DiscPrintingCombos');
		$this->loadModel('DiscPrintingPhotos');
		$arrData = array(
			'Discs' => $this->Disc->find('first'),
			'DiscPrintingCombos' => $this->DiscPrintingCombos->find('all'),
			'DiscPrintingPhotos' => $this->DiscPrintingPhotos->find('all')
		);
		$this->set($arrData);
	}

	public function photos(){
		$this->loadModel('DiscPhotoCombos');
		$this->loadModel('DiscPhotoPhotos');
		$arrData = array(
			'Discs' => $this->Disc->find('first'),
			'DiscPhotoCombos' => $this->DiscPhotoCombos->find('all'),
			'DiscPhotoPhotos' => $this->DiscPhotoPhotos->find('all')
		);
		$this->set($arrData);
	}
}