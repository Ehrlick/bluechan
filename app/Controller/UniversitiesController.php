<?php
class UniversitiesController extends AppController {
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');

	public function index() {
		$this->set('universities', $this->University->find('all'));
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->University->create();
			if ($this->University->save($this->request->data)) {
				$this->Session->setFlash('new University has been saved.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to add the University.');
			}
		}
	}
}