<?php
App::uses('AppController', 'Controller');
/**
 * Config Controller
 *
 * @property Config $Config
 */
class ConfigController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('api_getMenu');
	}

	public function api_getMenu(){
		$confPath = WWW_ROOT."files".DS."config".DS."menu.conf.json";
		$fileData = file_get_contents($confPath);
		$arrData = json_decode($fileData, true);
		$this->loadModel('Genre');

		foreach ($arrData as $key => $value) {
			$arrData[$key]['icon'] = 'perilla.png';
		};
		foreach ($this->Genre->find('all') as $key => $value) {
			$arrValue = array(
				'title' => $value['Genre']['name'],
				'url' => '/bands/' . strtolower($value['Genre']['name']),
				'icon' => false
			);
			array_push($arrData[9]['children'], $arrValue);
		}

		echo(stripslashes(json_encode($arrData)));
	}

}
