<?php
App::uses('AppController', 'Controller');
/**
 * MoviesLanguages Controller
 *
 * @property MoviesLanguage $MoviesLanguage
 */
class MoviesLanguagesController extends AppController {

/**
 * backend_index method
 *
 * @return void
 */
	public function backend_index() {
		$this->MoviesLanguage->recursive = 0;
		$this->set('moviesLanguages', $this->paginate());
	}

/**
 * backend_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function backend_view($id = null) {
		$this->MoviesLanguage->id = $id;
		if (!$this->MoviesLanguage->exists()) {
			throw new NotFoundException(__('Invalid movies language'));
		}
		$this->set('moviesLanguage', $this->MoviesLanguage->read(null, $id));
	}

/**
 * backend_add method
 *
 * @return void
 */
	public function backend_add() {
		if ($this->request->is('post')) {
			$this->MoviesLanguage->create();
			if ($this->MoviesLanguage->save($this->request->data)) {
				$this->Session->setFlash(__('The movies language has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The movies language could not be saved. Please, try again.'));
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
		$this->MoviesLanguage->id = $id;
		if (!$this->MoviesLanguage->exists()) {
			throw new NotFoundException(__('Invalid movies language'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MoviesLanguage->save($this->request->data)) {
				$this->Session->setFlash(__('The movies language has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The movies language could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->MoviesLanguage->read(null, $id);
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
		$this->MoviesLanguage->id = $id;
		if (!$this->MoviesLanguage->exists()) {
			throw new NotFoundException(__('Invalid movies language'));
		}
		if ($this->MoviesLanguage->delete()) {
			$this->Session->setFlash(__('Movies language deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Movies language was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
