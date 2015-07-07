<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\Time;
/**
 * Answers Controller
 *
 * @property \App\Model\Table\AnswersTable $Answers
 */
class AnswersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index($id = null)
    {
		$this->set('hwid', $this->Answers->Homeworks->find('all', [
			'conditions' => ['Homeworks.h_id =' => $id]]));
			
		
        $this->paginate = [
            'contain' => ['Homeworks']
        ];

       $this->set('answers', $this->paginate($this->Answers->find('all',[
		'conditions' => ['Homeworks.h_id =' => $id],
		'group'=> 'Answers.username'])));
        $this->set('_serialize', ['answers']);
    }

    /**
     * View method
     *
     * @param string|null $id Answer id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null, $username = null)
    {
		$this->set('u', $username);
		$this->set('hwid', $this->Answers->Homeworks->find('all', [
			'conditions' => ['Homeworks.h_id =' => $id]]));
			
		
        $this->paginate = [
            'contain' => ['Homeworks']
        ];
	
       $this->set('answers', $this->paginate($this->Answers->find('all',[
		'conditions' => ['Answers.username =' => $username]])));
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
		$this->set('hwid', $this->paginate($this->Answers->Homeworks->find('all', [
			'conditions' => ['Homeworks.h_id =' => $id]])));

        $answer = $this->Answers->newEntity();
        if ($this->request->is('post')) {
            $answer = $this->Answers->patchEntity($answer, $this->request->data);
			$answer->h_id = $id;
			$answer->username = $this->Auth->user('username');
			$answer->submission_time = Time::now();
            if ($this->Answers->save($answer)) {
			
                $this->Flash->success(__('The answer has been saved.'));
                return $this->redirect('/homeworks');
            } else {
                $this->Flash->error(__('The answer could not be saved. Please, try again.'));
            }
        }
        $homeworks = $this->Answers->Homeworks->find('list', ['limit' => 200]);
        $this->set(compact('answer', 'homeworks'));
        $this->set('_serialize', ['answer']);
    }
	
	public function logout()
	{
		return $this->redirect('/');
	}

	public function isAuthorized($user)
	{
		if (isset($user['username'])) {
			return true;
		}

		// Default deny
		return false;
	}
}