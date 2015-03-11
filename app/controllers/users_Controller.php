<?php
class UsersController extends AppController{
	var $layout = 'login';
	var $useDbConfig = 'admin';

	function index(){
	//action logic goes here
	}
	function login(){

	}
	function logout(){

	}
	var $components = array( 'Auth', 'Session');
    var $helpers = array('Html', 'Form', 'Session');

    function beforeFilter() {
        //Configure AuthComponent
        $this->Auth->authorize = 'actions';
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'logout');
        $this->Auth->loginRedirect = array('controller' => 'posts', 'action' => 'add');
    }
}
?>