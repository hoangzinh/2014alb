<?php

class Index extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() {
		if(
		$this->view->render('index/index');
	}

	function updatedfhawnasdfzsxlaqwwerusjd(){
		echo "Start update";
		$this->model->update_music();
		echo "Finish update";
	}
}
