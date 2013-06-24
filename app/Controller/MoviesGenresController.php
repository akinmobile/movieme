<?php
App::uses('AppController', 'Controller');
/**
 * MoviesGenres Controller
 *
 * @property MoviesGenre $MoviesGenre
 */
class MoviesGenresController extends AppController {

/**
 * backend_index method
 *
 * @return void
 */
	public function backend_index() {
		$this->MoviesGenre->recursive = 0;
		$this->set('moviesGenres', $this->paginate());
	}

/**
 * backend_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function backend_view($id = null) {
		$this->MoviesGenre->id = $id;
		if (!$this->MoviesGenre->exists()) {
			throw new NotFoundException(__('Invalid movies genre'));
		}
		$this->set('moviesGenre', $this->MoviesGenre->read(null, $id));
	}

/**
 * backend_add method
 *
 * @return void
 */
	public function backend_add() {
		if ($this->request->is('post')) {
			$this->MoviesGenre->create();
			if ($this->MoviesGenre->save($this->request->data)) {
				$this->Session->setFlash(__('The movies genre has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The movies genre could not be saved. Please, try again.'));
			}
		}
		$genres = $this->MoviesGenre->Genre->find('list');
		$movies = $this->MoviesGenre->Movie->find('list');
		$this->set(compact('genres', 'movies'));
	}

/**
 * backend_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function backend_edit($id = null) {
		$this->MoviesGenre->id = $id;
		if (!$this->MoviesGenre->exists()) {
			throw new NotFoundException(__('Invalid movies genre'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MoviesGenre->save($this->request->data)) {
				$this->Session->setFlash(__('The movies genre has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The movies genre could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->MoviesGenre->read(null, $id);
		}
		$genres = $this->MoviesGenre->Genre->find('list');
		$movies = $this->MoviesGenre->Movie->find('list');
		$this->set(compact('genres', 'movies'));
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
		$this->MoviesGenre->id = $id;
		if (!$this->MoviesGenre->exists()) {
			throw new NotFoundException(__('Invalid movies genre'));
		}
		if ($this->MoviesGenre->delete()) {
			$this->Session->setFlash(__('Movies genre deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Movies genre was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
