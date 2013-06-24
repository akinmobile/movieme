<?php
App::uses('AppController', 'Controller');
/**
 * Participants Controller
 *
 * @property Participant $Participant
 */
class ParticipantsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Participant->recursive = 0;
		$this->set('participants', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Participant->id = $id;
		if (!$this->Participant->exists()) {
			throw new NotFoundException(__('Invalid participant'));
		}
		$this->set('participant', $this->Participant->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Participant->create();
			if ($this->Participant->save($this->request->data)) {
				$this->Session->setFlash(__('The participant has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participant could not be saved. Please, try again.'));
			}
		}
		$movies = $this->Participant->Movie->find('list');
		$this->set(compact('movies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Participant->id = $id;
		if (!$this->Participant->exists()) {
			throw new NotFoundException(__('Invalid participant'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Participant->save($this->request->data)) {
				$this->Session->setFlash(__('The participant has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participant could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Participant->read(null, $id);
		}
		$movies = $this->Participant->Movie->find('list');
		$this->set(compact('movies'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Participant->id = $id;
		if (!$this->Participant->exists()) {
			throw new NotFoundException(__('Invalid participant'));
		}
		if ($this->Participant->delete()) {
			$this->Session->setFlash(__('Participant deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Participant was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * backend_index method
 *
 * @return void
 */
	public function backend_index() {
		$this->Participant->recursive = 0;
		$this->set('participants', $this->paginate());
	}

/**
 * backend_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function backend_view($id = null) {
		$this->Participant->id = $id;
		if (!$this->Participant->exists()) {
			throw new NotFoundException(__('Invalid participant'));
		}
		$this->set('participant', $this->Participant->read(null, $id));
	}

/**
 * backend_add method
 *
 * @return void
 */
	public function backend_add() {
		if ($this->request->is('post')) {
			$this->Participant->create();
			if ($this->Participant->save($this->request->data)) {
				$this->Session->setFlash(__('The participant has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participant could not be saved. Please, try again.'));
			}
		}
		$movies = $this->Participant->Movie->find('list');
		$this->set(compact('movies'));
	}

/**
 * backend_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function backend_edit($id = null) {
		$this->Participant->id = $id;
		if (!$this->Participant->exists()) {
			throw new NotFoundException(__('Invalid participant'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Participant->save($this->request->data)) {
				$this->Session->setFlash(__('The participant has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participant could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Participant->read(null, $id);
		}
		$movies = $this->Participant->Movie->find('list');
		$this->set(compact('movies'));
	}

/**
 * backend_delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function backend_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Participant->id = $id;
		if (!$this->Participant->exists()) {
			throw new NotFoundException(__('Invalid participant'));
		}
		if ($this->Participant->delete()) {
			$this->Session->setFlash(__('Participant deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Participant was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
