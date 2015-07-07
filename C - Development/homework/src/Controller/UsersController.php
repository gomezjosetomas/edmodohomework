<?php
// src/Controller/UsersController.php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Homeworks Controller
 *
 * @property \App\Model\Table\HomeworksTable $Homeworks
 */
class UsersController extends AppController
{

public function beforeFilter(\Cake\Event\Event $event)
{
    parent::beforeFilter($event);
    // Allow users to register and logout.
    // You should not add the "login" action to allow list. Doing so would
    // cause problems with normal functioning of AuthComponent.
    $this->Auth->allow(['logout']);
}

public function login()
{
    if ($this->request->is('post')) {
        $user = $this->Auth->identify();
        if ($user) {
            $this->Auth->setUser($user);
            return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Flash->error(__('Invalid username, try again'));
    }
}

public function logout()
{
    return $this->redirect($this->Auth->logout());
}

public function isAuthorized($user)
	{
		// Admin can access every action
		if (isset($user['username'])) {
			return true;
		}

		// Default deny
		return false;
	}
}