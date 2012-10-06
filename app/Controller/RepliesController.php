<?php
class RepliesController extends AppController {
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');
	
	public function beforeFilter()
	{
		parent::beforeFilter();
	}
	
	function add() {
		if ($this->request->is('post')) {
			$this->Reply->create();
			$this->request->data['Reply']['post_id'] = $this->request->params['named']['postid'];
			if ($this->Reply->save($this->request->data)) {
				$this->Session->setFlash('new Reply has been saved.');
		
				$this->redirect(array('controller' => 'posts', 'action' => 'view', $this->request->data['Reply']['post_id']));
			} else {
				$this->Session->setFlash('Unable to add the Reply.');
			}
		}
		
		$this->set('list',$this->Reply->Post->find('list',array('fields'=>array('id','title'))));
		$this->set('postid', $this->request->params['named']['postid']);
	}

}
