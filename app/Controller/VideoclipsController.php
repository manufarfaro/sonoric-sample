<?php
App::uses('AppController', 'Controller');
/**
 * Videoclips Controller
 *
 * @property Videoclip $Videoclip
 */
class VideoclipsController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Youtube');

public function beforeFilter() {
	parent::beforeFilter();
	$this->Auth->allow('index');
}

/**
 * Components
 *
 * @var array
 */
	public $components = array('Upload');

/**
 * index method
 *
 * @throws NotFoundException
 * @return void
 */
	public function index() {
		$id = 0;
		if (!$this->Videoclip->exists($id)) {
			throw new NotFoundException(__('Invalid videoclip'));
		}
		$options = array('conditions' => array('Videoclip.' . $this->Videoclip->primaryKey => $id));
		$arrData = array(
			'videoclip' => $this->Videoclip->find('first', $options),
			'videoclipCombos' => ClassRegistry::init('VideoclipCombos')->find('all')
		);
		$this->set($arrData);
	}

/**
 * admin_index method
 *
 * @throws NotFoundException
 * @return void
 */
	public function admin_index() {
		$id = 0;
		if (!$this->Videoclip->exists($id)) {
			throw new NotFoundException(__('Invalid videoclip'));
		}
		$options = array('conditions' => array('Videoclip.' . $this->Videoclip->primaryKey => $id));
		$this->set('videoclip', $this->Videoclip->find('first', $options));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @return void
 */
	public function admin_edit() {
		$id = 0;
		$this->Videoclip->id = 0;
		if (!$this->Videoclip->exists($id)) {
			throw new NotFoundException(__('Invalid videoclip'));
		}

		if ($this->request->is('post') || $this->request->is('put')) {

			$data = $this->request->data;
			
			$sqlQuery = "UPDATE sonoricstudios.videoclip SET id = ".$data['Videoclip']['id'].", text = '". $data['Videoclip']['text'] ."', url_image='". $data['Videoclip']['url_image'] ."', url_sample_video = '".$data['Videoclip']['url_sample_video'] ."' WHERE id = ". $data['Videoclip']['id'] ;

			//if ($this->Videoclip->save($this->request->data)) {
			$this->Videoclip->query($sqlQuery);
			if($this->Videoclip->query($sqlQuery)){
				$this->Session->setFlash(__('The videoclip has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The videoclip could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Videoclip.' . $this->Videoclip->primaryKey => $id));
			$this->request->data = $this->Videoclip->find('first', $options);
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @return void
 */
	public function admin_change_image() {
		$id = 0;
		$this->Videoclip->id = 0;
		if (!$this->Videoclip->exists($id)) {
			throw new NotFoundException(__('Invalid videoclip'));
		}

		if ($this->request->is('post') || $this->request->is('put')) {

			$data = $this->request->data;
			
			if(
				($data['Videoclip']['url_image']['size'] == 0) ||
				(($data['Videoclip']['url_image']['type'] != 'image/gif') &&
				($data['Videoclip']['url_image']['type'] != 'image/jpeg') &&
				($data['Videoclip']['url_image']['type'] != 'image/jpg') &&
				($data['Videoclip']['url_image']['type'] != 'image/png'))
			){
				$this->Session->setFlash(__('The videoclip could not be saved. Please, try again.'));
				return false;
			}
			$data['Videoclip']['url_image']['name'] = $this->Upload->uploadImage(
				$data['Videoclip']['url_image'], 
				DS.'files'.DS.'videoclip'.DS.'url_image'.DS.$data['Videoclip']['id'],
				'imageVideoclip_0'
			);

			$sqlQuery = "UPDATE sonoricstudios.videoclip SET id = ".$data['Videoclip']['id'].", text = '". $data['Videoclip']['text'] ."', url_image='". $data['Videoclip']['url_image']['name'] ."', url_sample_video = '".$data['Videoclip']['url_sample_video'] ."' WHERE id = ". $data['Videoclip']['id'] ;

			//if ($this->Videoclip->save($this->request->data)) {
			$this->Videoclip->query($sqlQuery);
			
			if($this->Videoclip->query($sqlQuery)){
				$this->Session->setFlash(__('The videoclip has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The videoclip could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Videoclip.' . $this->Videoclip->primaryKey => $id));
			$this->request->data = $this->Videoclip->find('first', $options);
		}
	}

}