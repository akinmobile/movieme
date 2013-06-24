<?php
App::uses('AppController', 'Controller');
/**
 * MoviesParticipants Controller
 *
 * @property MoviesParticipant $MoviesParticipant
 */
class MoviesParticipantsController extends AppController {

/**
 * backend_index method
 *
 * @return void
 */
	public function backend_index() {
		$this->MoviesParticipant->recursive = 0;
		$this->set('moviesParticipants', $this->paginate());
	}

/**
 * backend_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function backend_view($id = null) {
		$this->MoviesParticipant->id = $id;
		if (!$this->MoviesParticipant->exists()) {
			throw new NotFoundException(__('Invalid movies participant'));
		}
		$this->set('moviesParticipant', $this->MoviesParticipant->read(null, $id));
	}

/**
 * backend_add method
 *
 * @return void
 */
	public function backend_add() {
		if ($this->request->is('post')) {
			$this->MoviesParticipant->create();
			if ($this->MoviesParticipant->save($this->request->data)) {
				$this->Session->setFlash(__('The movies participant has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The movies participant could not be saved. Please, try again.'));
			}
		}
	}

/**
 * backend_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function backend_edit($id = null) {
		$this->MoviesParticipant->id = $id;
		if (!$this->MoviesParticipant->exists()) {
			throw new NotFoundException(__('Invalid movies participant'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MoviesParticipant->save($this->request->data)) {
				$this->Session->setFlash(__('The movies participant has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The movies participant could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->MoviesParticipant->read(null, $id);
		}
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
		$this->MoviesParticipant->id = $id;
		if (!$this->MoviesParticipant->exists()) {
			throw new NotFoundException(__('Invalid movies participant'));
		}
		if ($this->MoviesParticipant->delete()) {
			$this->Session->setFlash(__('Movies participant deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Movies participant was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
