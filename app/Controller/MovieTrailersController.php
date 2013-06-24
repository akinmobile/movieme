<?php
App::uses('AppController', 'Controller');
/**
 * MovieTrailers Controller
 *
 * @property MovieTrailer $MovieTrailer
 */
class MovieTrailersController extends AppController {

/**
 * backend_index method
 *
 * @return void
 */
	public function backend_index() {
		$this->MovieTrailer->recursive = 0;
		$this->set('movieTrailers', $this->paginate());
	}

/**
 * backend_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function backend_view($id = null) {
		$this->MovieTrailer->id = $id;
		if (!$this->MovieTrailer->exists()) {
			throw new NotFoundException(__('Invalid movie trailer'));
		}
		$this->set('movieTrailer', $this->MovieTrailer->read(null, $id));
	}

/**
 * backend_add method
 *
 * @return void
 */
	public function backend_add() {
		if ($this->request->is('post')) {
			$this->MovieTrailer->create();
			if ($this->MovieTrailer->save($this->request->data)) {
				$this->Session->setFlash(__('The movie trailer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The movie trailer could not be saved. Please, try again.'));
			}
		}
		$movies = $this->MovieTrailer->Movie->find('list');
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
		$this->MovieTrailer->id = $id;
		if (!$this->MovieTrailer->exists()) {
			throw new NotFoundException(__('Invalid movie trailer'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MovieTrailer->save($this->request->data)) {
				$this->Session->setFlash(__('The movie trailer has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The movie trailer could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->MovieTrailer->read(null, $id);
		}
		$movies = $this->MovieTrailer->Movie->find('list');
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
		$this->MovieTrailer->id = $id;
		if (!$this->MovieTrailer->exists()) {
			throw new NotFoundException(__('Invalid movie trailer'));
		}
		if ($this->MovieTrailer->delete()) {
			$this->Session->setFlash(__('Movie trailer deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Movie trailer was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
