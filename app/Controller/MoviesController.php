<?php
App::uses('AppController', 'Controller');
/**
 * Movies Controller
 *
 * @property Movie $Movie
 */
class MoviesController extends AppController {


public function index() {
	/**
	 * Load new movies
	 */
	 $data = $this->paginate('Movie');
     $this->set('movies', $data);
}

public function view($id = null) {
		$this->Movie->id = $id;
		if (!$this->Movie->exists()) {
			throw new NotFoundException(__('Movie not found'));
		}
		$this->set('movie', $this->Movie->read(null, $id));
	}
/**
 * backend_index method
 *
 * @return void
 */
	public function backend_index() {
		$this->Movie->recursive = 0;
		$this->set('movies', $this->paginate());
	}

/**
 * backend_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function backend_view($id = null) {
		$this->Movie->id = $id;
		if (!$this->Movie->exists()) {
			throw new NotFoundException(__('Invalid movie'));
		}
		$this->set('movie', $this->Movie->read(null, $id));
	}

/**
 * backend_add method
 *
 * @return void
 */
	public function backend_add() {
		if ($this->request->is('post')) {
			$this->Movie->create();
			if ($this->Movie->save($this->request->data)) {
				$this->Session->setFlash(__('The movie has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The movie could not be saved. Please, try again.'));
			}
		}
		$contentRatings = $this->Movie->ContentRating->find('list');
		$cinemas = $this->Movie->Cinema->find('list');
		$genres = $this->Movie->Genre->find('list');
		$participants = $this->Movie->Participant->find('list');
		$this->set(compact('contentRatings', 'cinemas', 'genres', 'participants'));
	}

/**
 * backend_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function backend_edit($id = null) {
		$this->Movie->id = $id;
		if (!$this->Movie->exists()) {
			throw new NotFoundException(__('Invalid movie'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Movie->save($this->request->data)) {
				$this->Session->setFlash(__('The movie has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The movie could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Movie->read(null, $id);
		}
		$contentRatings = $this->Movie->ContentRating->find('list');
		$cinemas = $this->Movie->Cinema->find('list');
		$genres = $this->Movie->Genre->find('list');
		$participants = $this->Movie->Participant->find('list');
		$this->set(compact('contentRatings', 'cinemas', 'genres', 'participants'));
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
		$this->Movie->id = $id;
		if (!$this->Movie->exists()) {
			throw new NotFoundException(__('Invalid movie'));
		}
		if ($this->Movie->delete()) {
			$this->Session->setFlash(__('Movie deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Movie was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
