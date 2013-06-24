<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	  public $pageTitle = '';
	  
	    public $components = array('Session');  
	    public $helpers = array('Session', 'Time');
	    public $current_user = null;
	  

	public function beforeFilter(){
		
		/**
		 * Only logged in and admin user us allowe to view backend
		 */
		if(isset($this->request->params['prefix']) && $this->request->params['prefix'] == 'backend') {

			$this->redirectIfNotLoggedIn();
		}
		
	}

	protected function redirectIfNotLoggedIn() {

		$userData = $this->Session->read('User');
		if(!$userData) {
			$this->miniFlash(__('You must login to continue'), '/users/login', 'error');
		}
	}

	protected function LoggedUserIsAdmin() {

	}

	/**
	 * Redirect with flash message
	 * 
	 * @param $message string  | the message you want to show to the user
	 * @param $url  string | the url you are redirecting to 
	 * @param $type string | error - success or info
	 */
	protected function miniFlash($message, $url, $type='success') {

 		$this->Session->setFlash($message, 'default', array(), $type);
        $this->redirect($url);
    }
 	
 	/**
 	 * Set flash message without redirect
 	 * 
 	 * @param $message string
 	 * @param $type string
 	 */
    protected function sFlash($message) {

        $this->Session->setFlash($message, 'default', array(), $type);
    }
}
