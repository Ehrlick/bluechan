<?php
class UniversityController extends AppController {
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');

	public function index() {
		$this->set('universities', $this->University->find('all'));
	}
}