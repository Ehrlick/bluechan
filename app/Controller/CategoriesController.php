<?php
class CategoriesController extends AppController {
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');

	public $scaffold;
	
	public function beforeFilter()
	{
		parent::beforeFilter();
	}
	
	public function view($id = null) {
		$this->Category->id = $id;
		$this->set('category', $this->Category->read());
	}
	
	public function admin_view($id = null) {
		$this->Category->id = $id;
		$this->set('category', $this->Category->read());
	}
	
	public function index() {
		$this->set('categories', $this->Category->find('all'));
	}
	
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Category->create();
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash('new Category has been saved.');
				$this->redirect(array('controller' => 'universities', 'action' => 'view', $this->Category['University']['University']['id']));
			} else {
				$this->Session->setFlash('Unable to add the Category.');
			}
		}
		$this->set('list',$this->Category->University->find('list',array('fields'=>array('id','full_name'))));
	}
	
}
