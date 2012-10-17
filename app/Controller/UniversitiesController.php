<?php
class UniversitiesController extends AppController {
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');
	
	var $uses = array('Category');

	public function beforeFilter()
	{
		parent::beforeFilter();
	}
	
	public function view($id = null) {
		$this->University->id = $id;
		$this->set('university', $this->University->read());
	}
	
	public function admin_view($id = null) {
		$this->University->id = $id;
		$this->set('university', $this->University->read());
	}
	
	public function index() {
		$this->set('universities', $this->University->find('all'));
		$this->set('categories', $this->Category->find('all'));
	}
	
	public function admin_index() {
		$this->set('universities', $this->University->find('all'));
	}
	
	public function admin_add() {
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
	
	public function admin_edit($id = null) {
		$this->University->id = $id;
		if ($this->request->is('get')) {
			$this->request->data = $this->University->read();
		} else {
			if ($this->University->save($this->request->data)) {
				$this->Session->setFlash('University has been updated.');
				$this->redirect(array('admin' => true, 'action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to update University info.');
			}
		}
	}
	
	public function admin_delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->University->delete($id)) {
			$this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
			$this->redirect(array('admin' => true, 'action' => 'index'));
		}
	}
}