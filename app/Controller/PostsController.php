<?php
class PostsController extends AppController {
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');
	
	public function beforeFilter()
	{
		parent::beforeFilter();
	}
	
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Category->create();
			$this->request->data['Category']['university_id'] = $this->request->params['named']['universityid'];
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash('new Category has been saved.');
	
				//$this->set('university', $this->Category->University->read());
				//echo $this->Category->university_id;
				$this->redirect(array('controller' => 'universities', 'action' => 'view', $this->request->data['Category']['university_id']));
				//$this->redirect($this->referer());
			} else {
				$this->Session->setFlash('Unable to add the Category.');
			}
		}
	
		$this->set('list',$this->Category->University->find('list',array('fields'=>array('id','full_name'))));
		$this->set('universityid', $this->request->params['named']['universityid']);
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
}
