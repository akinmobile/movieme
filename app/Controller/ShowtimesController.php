<?php
App::uses('AppController', 'Controller');
/**
 * Showtimes Controller
 *
 * @property Showtime $Showtime
 */
class ShowtimesController extends AppController {

/**
 * backend_index method
 *
 * @return void
 */
	public function backend_index() {
		$this->Showtime->recursive = 0;
		$this->set('showtimes', $this->paginate());
	}

/**
 * backend_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function backend_view($id = null) {
		$this->Showtime->id = $id;
		if (!$this->Showtime->exists()) {
			throw new NotFoundException(__('Invalid showtime'));
		}
		$this->set('showtime', $this->Showtime->read(null, $id));
	}

/**
 * backend_add method
 *
 * @return void
 */
	public function backend_add() {
		if ($this->request->is('post')) {
			$this->Showtime->create();
			if ($this->Showtime->save($this->request->data)) {
				$this->Session->setFlash(__('The showtime has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The showtime could not be saved. Please, try again.'));
			}
		}
		$cinemasMovies = $this->Showtime->CinemasMovie->find('list');
		$movies = $this->Showtime->Movie->find('list');
		$cinemas = $this->Showtime->Cinema->find('list');
		$this->set(compact('cinemasMovies', 'movies', 'cinemas'));
	}

/**
 * backend_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function backend_edit($id = null) {
		$this->Showtime->id = $id;
		if (!$this->Showtime->exists()) {
			throw new NotFoundException(__('Invalid showtime'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Showtime->save($this->request->data)) {
				$this->Session->setFlash(__('The showtime has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The showtime could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Showtime->read(null, $id);
		}
		$cinemasMovies = $this->Showtime->CinemasMovie->find('list');
		$movies = $this->Showtime->Movie->find('list');
		$cinemas = $this->Showtime->Cinema->find('list');
		$this->set(compact('cinemasMovies', 'movies', 'cinemas'));
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
		$this->Showtime->id = $id;
		if (!$this->Showtime->exists()) {
			throw new NotFoundException(__('Invalid showtime'));
		}
		if ($this->Showtime->delete()) {
			$this->Session->setFlash(__('Showtime deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Showtime was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
