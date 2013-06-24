<?php
App::uses('AppController', 'Controller');
/**
 * MoviePhotos Controller
 *
 * @property MoviePhoto $MoviePhoto
 */
class MoviePhotosController extends AppController {

/**
 * backend_index method
 *
 * @return void
 */
	public function backend_index() {
		$this->MoviePhoto->recursive = 0;
		$this->set('moviePhotos', $this->paginate());
	}

/**
 * backend_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function backend_view($id = null) {
		$this->MoviePhoto->id = $id;
		if (!$this->MoviePhoto->exists()) {
			throw new NotFoundException(__('Invalid movie photo'));
		}
		$this->set('moviePhoto', $this->MoviePhoto->read(null, $id));
	}

/**
 * backend_add method
 *
 * @return void
 */
	public function backend_add() {
		if ($this->request->is('post')) {
			$this->MoviePhoto->create();
			if ($this->MoviePhoto->save($this->request->data)) {
				$this->Session->setFlash(__('The movie photo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The movie photo could not be saved. Please, try again.'));
			}
		}
		$movies = $this->MoviePhoto->Movie->find('list');
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
		$this->MoviePhoto->id = $id;
		if (!$this->MoviePhoto->exists()) {
			throw new NotFoundException(__('Invalid movie photo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MoviePhoto->save($this->request->data)) {
				$this->Session->setFlash(__('The movie photo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The movie photo could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->MoviePhoto->read(null, $id);
		}
		$movies = $this->MoviePhoto->Movie->find('list');
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
		$this->MoviePhoto->id = $id;
		if (!$this->MoviePhoto->exists()) {
			throw new NotFoundException(__('Invalid movie photo'));
		}
		if ($this->MoviePhoto->delete()) {
			$this->Session->setFlash(__('Movie photo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Movie photo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
