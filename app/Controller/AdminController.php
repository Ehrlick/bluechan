<?php
class AdminController extends AppController
{
	public
	$uses = Array('User');

	public function beforeFilter()
	{
		parent::beforeFilter();
		$this->layout = 'admin';
		$this->Auth->allow('add', 'login');
	}

	public function index()
	{
		$this->set('title_for_layout', 'ダッシュボード | 管理画面');
	}

	public function login() {
		if($this->request->is('post')) {
			if($this->Auth->login()) {
				return $this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash(__('Username or password is incorrect'), 'default', array(), 'auth');
			}
		}
	}

	public function logout($id = null)
	{
		$this->redirect($this->Auth->logout());
	}

	public function add() {
		if($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}
}