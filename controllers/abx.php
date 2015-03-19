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
		//check if it's post edit request
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			if (isset($_POST['email'])) {
				$email = $_POST['email'];
				$this->view->data = $this->model->getListAlbumByEmail($email);
			}
		}
		$this->view->total = $this->model->getTotal($table_album = "list_albums");
		$this->view->render('abx/viewalbum','header_mem');
	}

	function viewuser(){
		$userid = $this->checkPermission();
		$this->view->username = $userid;
		$this->view->userid = $userid;

		if($_SERVER['REQUEST_METHOD'] == "POST"){
			if (isset($_POST['email'])) {
				$email = $_POST['email'];
				$this->view->data = $this->model->getUserByEmail($email);
			}
		}
		$this->view->total = $this->model->getTotal($table_user = "users");
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

	// //function convert link music from table album to table music
	// function convert_table_album_to_music(){
	// 	require 'libs/Music/getlink.php';
	// 	$db = $this->model->db;
	// 	$sth = $db->prepare("SELECT id,music FROM ".DB_PREFIX."list_albums");
	// 	$sth->execute();
	// 	$data = $sth->fetchAll();
	// 	foreach ($data as $row){
	// 		$url_embed = get_link_music_embed($row['music']);
	// 		$sthi = $db->prepare("INSERT INTO ".DB_PREFIX."list_musics (`id_album`,`music`,`music_embed`,`is_flash`)
	// 			VALUES (:id_album,:music,:music_embed,:is_flash)");
	// 		$sthi->execute(array(
	// 			':id_album' => $row['id'],
	// 			':music' => $row['music'],
	// 			':music_embed' => $url_embed['data'],
	// 			':is_flash' => $url_embed['is_flash']
	// 		));
	// 	}
	// }
}
