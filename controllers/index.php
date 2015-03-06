<?php

class Index extends Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		if(USE_FLASH === '0'){
			$listen ="";
			if(isset($_GET['thuongthuc']))
				$listen = $_GET['thuongthuc'];
			switch ($listen){
				case "westlife":
				case "BB":
				case "nhac-giao-huong":
				case "happy-birthday":
				case "nhac-mua":
				case "loi-cua-song":
				case "nhac-san":
				case "my-gu":
				case "bich-phuong":
				case "guitar":
				case "piano":
				case "sao-tieu-dao":
				case "nhac-au-mi":
				case "tuoi-hoc-tro":
				case "dong-que":
				case "nhac-han":
				case "rock":
				case "rap":
				case "anh-nho-em":
				case "em-nho-anh":
				case "top-viet":
					break;
				default:
					$listen = "default";
					break;
			}
			if(!$this->model)
				$this->loadModel('index');
			$this->view->music_album = $this->model->get_music_to_play($listen);
		}
		$this->view->render('index/index');
	}

	function updatedfhawnasdfzsxlaqwwerusjd(){
		if (isset($_GET['from']) && isset($_GET['to']))
		{
			$from = $_GET['from'];
			$to   = $_GET['to'];
			echo "Start update from id=$from to id=$to";
			$this->model->update_music();
			echo "<p>Finish update</p>";
		}
	}

	function indexupdatedfhawnasdfzsxlaqwwerusjd(){
		echo "Start update index";
		$this->model->update_music_index();
		echo "<p>Finish update</p>";
	}
}
