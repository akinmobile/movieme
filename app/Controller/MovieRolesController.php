<?php
App::uses('AppController', 'Controller');
/**
 * MovieRoles Controller
 *
 * @property MovieRole $MovieRole
 */
class MovieRolesController extends AppController {

/**
 * backend_index method
 *
 * @return void
 */
	public function backend_index() {
		$this->MovieRole->recursive = 0;
		$this->set('movieRoles', $this->paginate());
	}

/**
 * backend_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function backend_view($id = null) {
		$this->MovieRole->id = $id;
		if (!$this->MovieRole->exists()) {
			throw new NotFoundException(__('Invalid movie role'));
		}
		$this->set('movieRole', $this->MovieRole->read(null, $id));
	}

/**
 * backend_add method
 *
 * @return void
 */
	public function backend_add() {
		if ($this->request->is('post')) {
			$this->MovieRole->create();
			if ($this->MovieRole->save($this->request->data)) {
				$this->Session->setFlash(__('The movie role has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The movie role could not be saved. Please, try again.'));
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
		$this->MovieRole->id = $id;
		if (!$this->MovieRole->exists()) {
			throw new NotFoundException(__('Invalid movie role'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MovieRole->save($this->request->data)) {
				$this->Session->setFlash(__('The movie role has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The movie role could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->MovieRole->read(null, $id);
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
		$this->MovieRole->id = $id;
		if (!$this->MovieRole->exists()) {
			throw new NotFoundException(__('Invalid movie role'));
		}
		if ($this->MovieRole->delete()) {
			$this->Session->setFlash(__('Movie role deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Movie role was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
