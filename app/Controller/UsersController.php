<?php
class UsersController extends AppController
{
	public
	$uses = Array('User');

	public function beforeFilter()
	{
		parent::beforeFilter();
		$this->layout = 'admin';
		$this->Auth->allow('login');
	}

	public function admin_index()
	{
		$this->set('title_for_layout', 'ダッシュボード | 管理画面');
	}

	public function admin_login() {
		if($this->request->is('post')) {
			if($this->Auth->login()) {
				return $this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash(__('Username or password is incorrect'), 'default', array(), 'auth');
			}
		}
	}

	public function admin_logout($id = null)
	{
		$this->redirect($this->Auth->logout());
	}

	public function admin_add() {
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