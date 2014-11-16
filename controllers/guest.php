<?php

class Guest extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() {
		//$this->view->render('guest/index');
		header('location: '.URL.'guest/login');
		exit;
	}

	function privacy(){
		$this->view->render('guest/privacy','header_guest');
	}
        
	function login() {
		Session::check_login($this->model->db,true,false);
		$this->view->render('guest/login','header_guest');
	}
	
	function forgotpass() {
		Session::check_login($this->model->db,true,false);
		$this->view->render('guest/forgotpass','header_guest');
	}
	
	function requestlogin(){
		$error = $this->model->requestlogin();
		echo $error;
	}
	
	function requestregister(){
		$error = $this->model->requestregister();
		echo $error;
	}
	
	function requestresetpass(){
		$error = $this->model->requestresetpass();
		echo $error;
	}
	
	function reset(){
		//$this->checklogin();
		ob_start();
		//check if it's post edit request
		if($_SERVER['REQUEST_METHOD'] == "POST"){ 
			Session::init();
			if(isset($_POST['password']) && isset($_SESSION['email']))
			{
				$email = $_SESSION['email'];
				$this->model->updatePass($email,$_POST['password']);
				Session::destroy();
				$id = $this->model->getUserIDbyEmail($email);
				if ($id == NULL)
						$this->model->redirect_to_error_page();
				$this->model->setSession($id);
				header('location:'.URL.'guest/login');
				
				exit;
			}
			Session::destroy();
		}
		
		$this->view->is_valid = $this->model->checkValidToken();
		$this->view->render('guest/reset','header_guest');
	}
}
