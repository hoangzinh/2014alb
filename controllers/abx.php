<?php

class Abx extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() {
            $userid = $this->checkPermission();
            $this->view->username = $userid;
            $this->view->userid = $userid;
            $this->view->render('abx/index','header_mem');
	}
        
        function viewalbum(){
            $userid = $this->checkPermission();
            $this->view->username = $userid;
            $this->view->userid = $userid;
            $this->view->data = $this->model->getListAlbum();
            $this->view->render('abx/viewalbum','header_mem');
        }
        
        function viewuser(){
            $userid = $this->checkPermission();
            $this->view->username = $userid;
            $this->view->userid = $userid;
            $this->view->data = $this->model->getListUser();
            $this->view->render('abx/viewuser','header_mem');
		}

        function viewpublicalbum(){
            $userid = $this->checkPermission();
            $this->view->username = $userid;
            $this->view->userid = $userid;
            $this->view->data = $this->model->getListPublicAlbum();
            $this->view->render('abx/viewalbum','header_mem');
        }
        
        function previewstatus(){
            $userid = $this->checkPermission();
            
            //check if it's post edit request
            if($_SERVER['REQUEST_METHOD'] == "POST"){ 
                if (isset($_POST['idnumber'])) {
                    $id = $_POST['idnumber'];
                    $this->model->deletePreviewTable($id);
                }
            }
            $this->view->username = $userid;
            $this->view->userid = $userid;
            $this->view->data = $this->model->getPreviewTable();
            $this->view->render('abx/previewstatus','header_mem');
        }
        
        function checkPermission() {
            Session::init();
            $userid = Session::get('userid');
            if ($userid != ADMINID)
            {
                header('location: '.URL.'error');
                exit;
            }
            return $userid;
            
        }
}
