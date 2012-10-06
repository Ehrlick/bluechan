<?php
class PostsController extends AppController {
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');
	
	public function beforeFilter()
	{
		parent::beforeFilter();
	}
	
	public function view($id = null) {
		$this->Post->id = $id;
		$this->set('post', $this->Post->read());
	}
	
	public function admin_view($id = null) {
		$this->Post->id = $id;
		$this->set('post', $this->Post->read());
	}
	
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Post->create();
			$this->request->data['Post']['category_id'] = $this->request->params['named']['categoryid'];
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash('new Post has been saved.');
		
				$this->redirect(array('controller' => 'categories', 'action' => 'view', $this->request->data['Post']['category_id']));
			} else {
				$this->Session->setFlash('Unable to add the Post.');
			}
		}
		
		$this->set('list',$this->Post->Category->find('list',array('fields'=>array('id','title'))));
		$this->set('categoryid', $this->request->params['named']['categoryid']);
	}
	
	function add() {
		if ($this->request->is('post')) {
			$this->Post->create();
			$this->request->data['Post']['category_id'] = $this->request->params['named']['categoryid'];
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash('new Post has been saved.');
		
				$this->redirect(array('controller' => 'categories', 'action' => 'view', $this->request->data['Post']['category_id']));
			} else {
				$this->Session->setFlash('Unable to add the Post.');
			}
		}
		
		$this->set('list',$this->Post->Category->find('list',array('fields'=>array('id','title'))));
		$this->set('categoryid', $this->request->params['named']['categoryid']);
	}
	
	public function admin_delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Post->delete($id)) {
			$this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
			$this->redirect($this->referer());
		}
	}
}
