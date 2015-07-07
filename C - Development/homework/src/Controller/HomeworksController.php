<?php
namespace App\Controller;

use App\Controller\AppController;


/**
 * Homeworks Controller
 *
 * @property \App\Model\Table\HomeworksTable $Homeworks
 */
class HomeworksController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {	

		$homeworks = $this->Homeworks->find('all', [
			'conditions' => ['Homeworks.username =' => $this->Auth->user('username')]
		]);
		$this->set('homeworks', $this->paginate($this->Homeworks->find('all', [
			'conditions' => ['Homeworks.username =' => $this->Auth->user('username')]
		])));
        $this->set('_serialize', ['homeworks']);

    }
	public function logout()
{
    return $this->redirect($this->Auth->logout());
}

	public function isAuthorized($user)
	{

		if (isset($user['username']) && $user['usertype'] === TRUE) {
			return true;
		}
		

		// Default deny
		return $this->redirect('/assigned_to');
	}
}
