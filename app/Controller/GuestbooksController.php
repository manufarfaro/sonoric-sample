<?php
App::uses('AppController', 'Controller');

/**
 * Guestbooks Controller
 *
 * @property Guestbook $Guestbook
 */
class GuestbooksController extends AppController {

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
		//Do Nothing
	}

/**
 * Admin index method
 *
 * @return void
 */
	public function admin_index() {
		//Do Nothing
	}
}
