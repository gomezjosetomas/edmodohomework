<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;
/**
 * AssignedTo Controller
 *
 * @property \App\Model\Table\AssignedToTable $AssignedTo
 */
class AssignedToController extends AppController
{
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Homeworks']
        ];
        $this->set('assignedTo', $this->paginate($this->AssignedTo->find('all', [
			'conditions' => ['AssignedTo.username =' => $this->Auth->user('username')]
		])));
        $this->set('_serialize', ['assignedTo']);
		$this->set('time', Time::now());
    }
	
	public function logout()
	{
		return $this->redirect('/');
	}

	public function isAuthorized($user)
	{
		// Admin can access every action
		if (isset($user['username']) && $user['usertype'] === FALSE) {
			return true;
		}

		// Default deny
		return false;
	}
}
