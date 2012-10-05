<?php
class CategoriesController extends AppController {
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');
	
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
				
				//$this->set('university', $this->Category->University->read());
				echo $this->Category->university_id;
				$this->redirect(array('controller' => 'universities', 'action' => 'view', $this->Category->university_id));
			} else {
				$this->Session->setFlash('Unable to add the Category.');
			}
		}
		
		$this->set('list',$this->Category->University->find('list',array('fields'=>array('id','full_name'))));
	}
	
	public function admin_delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Category->delete($id)) {
			$this->Session->setFlash('The category with id: ' . $id . ' has been deleted.');
			$this->redirect(array('admin' => true, 'controller' => 'universities', 'action' => 'index'));
		}
	}
	
}
