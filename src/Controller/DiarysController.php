<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Diarys Controller
 *
 * @property \App\Model\Table\DiarysTable $Diarys
 *
 * @method \App\Model\Entity\Diary[] paginate($object = null, array $settings = [])
 */
class DiarysController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $diarys = $this->paginate($this->Diarys);

        $this->set(compact('diarys'));
        $this->set('_serialize', ['diarys']);
    }

    /**
     * View method
     *
     * @param string|null $id Diary id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $diary = $this->Diarys->get($id, [
            'contain' => []
        ]);

        $this->set('diary', $diary);
        $this->set('_serialize', ['diary']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $diary = $this->Diarys->newEntity();
        if ($this->request->is('post')) {
            $diary = $this->Diarys->patchEntity($diary, $this->request->getData());
            if ($this->Diarys->save($diary)) {
                $this->Flash->success(__('The diary has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The diary could not be saved. Please, try again.'));
        }
        $this->set(compact('diary'));
        $this->set('_serialize', ['diary']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Diary id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $diary = $this->Diarys->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $diary = $this->Diarys->patchEntity($diary, $this->request->getData());
            if ($this->Diarys->save($diary)) {
                $this->Flash->success(__('The diary has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The diary could not be saved. Please, try again.'));
        }
        $this->set(compact('diary'));
        $this->set('_serialize', ['diary']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Diary id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $diary = $this->Diarys->get($id);
        if ($this->Diarys->delete($diary)) {
            $this->Flash->success(__('The diary has been deleted.'));
        } else {
            $this->Flash->error(__('The diary could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
