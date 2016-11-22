<?php
App::uses('AppController', 'Controller');
/**
 * Bands Controller
 *
 * @property Band $Band
 */
class BandsController extends AppController {

public function beforeFilter() {
	parent::beforeFilter();
	$this->Auth->allow('lists', 'view');
}

/**
 * list method
 *
 * @return void
 */
	public function lists($genre = null){
		$this->loadmodel('Genre');

		$arrGenreOptions = array(
			'conditions' => array(
				'LCASE(REPLACE(Genre.name, " ", "_")) = "' . strtolower(str_replace("_", " ", $genre)) . '"'
			)
		);
		$genre = $this->Genre->find('first', $arrGenreOptions);

		if (count($genre) < 1) {
			//throw new NotFoundException(__('Invalid Genre'));
			$this->render('/Errors/error404');
			return true;
		}

		$arrBandOptions = array(
			'conditions' => array(
				'Band.genre_id ='. $genre['Genre']['id']
			)
		);
		$this->Band->recursive = -1;

		$arrData = array(
			'genre' => $genre,
			'bands' => $this->Band->find('all', $arrBandOptions)
		);

		$this->set($arrData);
		$this->render('lists');
	}

/**
 * list method
 *
 * @return void
 */
	public function view($genre = null, $name = null){

		$this->loadmodel('Genre');

		$arrGenreOptions = array(
			'conditions' => array(
				'LCASE(REPLACE(Genre.name, " ", "_")) = "' . strtolower(str_replace("_", " ", $genre)) . '"'
			)
		);
		$genre = $this->Genre->find('first', $arrGenreOptions);

		if (count($genre) < 1) {
			//throw new NotFoundException(__('Invalid Genre'));
			$this->render('/Errors/error404');
			return true;
		}

		$arrBandOptions = array(
			'conditions' => array(
				'Band.genre_id ='. $genre['Genre']['id'],
				'LCASE(REPLACE(Band.name, " ", "_")) = "'. strtolower($name) . '"'
			)
		);

		$this->Band->recursive = 2;

		$band = $this->Band->find('first', $arrBandOptions);

		if (count($band) < 1) {
			//throw new NotFoundException(__('Invalid Genre'));
			$this->render('/Errors/error404');
			return true;
		}

		$arrData = array(
			'band' => $band
		);

		$this->set($arrData);

		$this->layout = 'default.nosponsors';
		$this->render('view');
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Band->recursive = 0;
		$this->set('bands', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Band->exists($id)) {
			throw new NotFoundException(__('Invalid band'));
		}
		$options = array('conditions' => array('Band.' . $this->Band->primaryKey => $id));
		$this->set('band', $this->Band->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Band->create();
			if ($this->Band->save($this->request->data)) {
				$this->Session->setFlash(__('The band has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The band could not be saved. Please, try again.'));
			}
		}
		$genres = $this->Band->Genre->find('list');
		$this->set(compact('genres'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Band->exists($id)) {
			throw new NotFoundException(__('Invalid band'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Band->save($this->request->data)) {
				$this->Session->setFlash(__('The band has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The band could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Band.' . $this->Band->primaryKey => $id));
			$this->request->data = $this->Band->find('first', $options);
		}
		$genres = $this->Band->Genre->find('list');
		$this->set(compact('genres'));
	}

/**
 * admin_change_image_logo method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_change_image_logo($id = null) {
		if (!$this->Band->exists($id)) {
			throw new NotFoundException(__('Invalid band'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Band->save($this->request->data)) {
				$this->Session->setFlash(__('The band has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The band could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Band.' . $this->Band->primaryKey => $id));
			$this->request->data = $this->Band->find('first', $options);
		}

		$arrData = array(
			'genres' => $this->Band->Genre->find('list'),
			'band' => $this->Band->find('first')
		);

		$this->set($arrData);
	}

/**
 * admin_change_image_brand method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_change_image_brand($id = null) {
		if (!$this->Band->exists($id)) {
			throw new NotFoundException(__('Invalid band'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Band->save($this->request->data)) {
				$this->Session->setFlash(__('The band has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The band could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Band.' . $this->Band->primaryKey => $id));
			$this->request->data = $this->Band->find('first', $options);
		}
		$arrData = array(
			'genres' => $this->Band->Genre->find('list'),
			'band' => $this->Band->find('first')
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
		$this->Band->id = $id;
		if (!$this->Band->exists()) {
			throw new NotFoundException(__('Invalid band'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Band->delete()) {
			$this->Session->setFlash(__('Band deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Band was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
