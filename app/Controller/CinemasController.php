<?php
App::uses('AppController', 'Controller');
/**
 * Cinemas Controller
 *
 * @property Cinema $Cinema
 */
class CinemasController extends AppController {

/**
 * backend_index method
 *
 * @return void
 */
	public function backend_index() {
		$this->Cinema->recursive = 0;
		$this->set('cinemas', $this->paginate());
	}

/**
 * backend_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function backend_view($id = null) {
		$this->Cinema->id = $id;
		if (!$this->Cinema->exists()) {
			throw new NotFoundException(__('Invalid cinema'));
		}
		$this->set('cinema', $this->Cinema->read(null, $id));
	}

/**
 * backend_add method
 *
 * @return void
 */
	public function backend_add() {
		if ($this->request->is('post')) {
			$this->Cinema->create();
			if ($this->Cinema->save($this->request->data)) {
				$this->Session->setFlash(__('The cinema has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cinema could not be saved. Please, try again.'));
			}
		}
		$locations = $this->Cinema->Location->find('list');
		$movies = $this->Cinema->Movie->find('list');
		$this->set(compact('locations', 'movies'));
	}

/**
 * backend_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function backend_edit($id = null) {
		$this->Cinema->id = $id;
		if (!$this->Cinema->exists()) {
			throw new NotFoundException(__('Invalid cinema'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cinema->save($this->request->data)) {
				$this->Session->setFlash(__('The cinema has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cinema could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Cinema->read(null, $id);
		}
		$locations = $this->Cinema->Location->find('list');
		$movies = $this->Cinema->Movie->find('list');
		$this->set(compact('locations', 'movies'));
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
		$this->Cinema->id = $id;
		if (!$this->Cinema->exists()) {
			throw new NotFoundException(__('Invalid cinema'));
		}
		if ($this->Cinema->delete()) {
			$this->Session->setFlash(__('Cinema deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cinema was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
