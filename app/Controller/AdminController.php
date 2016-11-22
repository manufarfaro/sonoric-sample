<?php

App::Uses('AppController', 'Controller');

class AdminController extends AppController{
	
	public $name = 'Admin';

	public $uses = array();

	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index');
    }

	public function index($option = ''){
		$this->loadmodel('IndexText');
		$this->loadmodel('IndexPhoto');
		$this->loadmodel('IndexNotice');
		
		$limit = 3;

		if(is_numeric($option)){
			$this->paginate = array(
				'limit' => $limit,
				'order' => array(
					'IndexNotice.dateCreated' => 'DESC'
				),
				'page' => $option
			);
		}else{
			$this->paginate = array(
				'limit' => $limit,
				'order' => array(
					'IndexNotice.dateCreated' => 'DESC'
				)
			);
		}
		

		
		try{
			$arrVars = array(
				'title_for_layout' => 'Inicio',
				'IndexText' => $this->IndexText->find('first'),
				'IndexPhoto' => $this->IndexPhoto->find('all'),
				'IndexNotice' => $this->paginate('IndexNotice')
			);
		} catch (NotFoundException $e){
			$this->render('/Errors/error404');
			return true;
		}
		
		$this->set($arrVars);
		$this->render('index');
		
	}

	public function indexComingSoon(){
		$arrVars = array(
			'title_for_layout' => 'Proximamente'
		);
		
		$this->set($arrVars);
		$this->layout = 'non_logged';
		$this->render('indexComingSoon');

	}

	public function admIndex(){
		$arrVars = array(
			'title_for_layout' => 'Inicio'
		);
		
		$this->set($arrVars);
		$this->layout = 'admin.default';
		$this->render('admin_index');
	}

}
