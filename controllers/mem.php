<?php

class Mem extends Controller {

	function __construct() {                
		parent::__construct();
		Session::init();
	}
	
	function index() {
		$this->view->render('mem/index');            
	}
        
	function memquery($name_mem,$name_album){
		if ($name_album == NULL)
			$this->mem_index($name_mem);
		else
			switch ($name_album) {
				case "update":
					$this->mem_update_album($name_mem);
					break;
				case "create":
					$this->mem_create($name_mem);
					break;
				case "logout":
					$this->requestlogout();
					break;
				case "setting":
					$this->mem_setting($name_mem);
					break;
				default :
					$pos = strpos($name_album,'-');
					if ($pos == false)
					{
						header('location: '.URL.'error');
						exit;
					}
					$id_album = substr($name_album, 0,$pos);
					if (!is_numeric($id_album))
					{
						header('location: '.URL.'error');
						exit;
					}

					$this->mem_showalbum($name_mem,$id_album);                    
			}            
	}    
	
	
	function mem_index($_name_mem) {
		Session::check_login($this->model->db);
		$userid = $this->check_validation($_name_mem);
		
		//check if it's post edit request
		if($_SERVER['REQUEST_METHOD'] == "POST"){ 
			if (isset($_POST['submit_delete_album'])) {
				if (isset($_POST['id_album']))
				{
					$id_album = $_POST['id_album'];
					$this->model->deleteAlbum($id_album);
					$this->model->deleteStoryAlbum($id_album);
					$this->model->deletePhotoyAlbum($id_album);
				}
				return;
			}
			if (isset($_POST['submit_public_fbpage'])) {
				if (isset($_POST['id_album']))
				{
					$id_album = $_POST['id_album'];
					$this->model->publicFBPage($id_album);
				}
				return;
			}
		}
		
		$this->view->username = $_name_mem;
		$this->view->userid = $userid;
		$this->view->list_album = $this->model->getListAlbum($userid);
		$this->view->render('mem/index',"header_mem");
	}
	
	function mem_create($_name_mem) {
		Session::check_login($this->model->db);
		$userid = $this->check_validation($_name_mem);
		
		//check if it's post edit request
		if($_SERVER['REQUEST_METHOD'] == "POST"){ 
			if (isset($_POST['submit_create_album'])) {     //sumit create photos   
				if (isset($_POST['name_album']) && isset($_POST['link_music']) &&
					isset($_POST['title_story']) && isset($_POST['content_story']))
					{
						
						$id_album = $this->model->createNewAlbum($userid,$_POST['name_album'],$_POST['link_music']);
						$this->model->createNewStoryAlbum($id_album,$_POST['title_story'],$_POST['content_story']);
						$this->model->createNewMusicAlbum($id_album,$_POST['link_music']);
					}
				
				$stt = 1;
				while (isset($_POST['link'.$stt]))
				{
					if (isset($_POST['cmt'.$stt]))
					{
						$this->model->createNewPhotoAlbum($id_album,$_POST['link'.$stt],$_POST['cmt'.$stt],$stt);
					}
					$stt = $stt + 1;
				}
				$this->redirect_to_user_home($_name_mem); 
			} 
		}
		
		$this->view->username = $_name_mem;
		$this->view->userid = $userid;
		$this->view->list_album = $this->model->getListAlbum($userid);
		$this->view->id_preview = $this->memGetIDPreview($userid);
		$this->view->render('mem/create',"header_mem");
	}
	
	function mem_setting($_name_mem) {
		Session::check_login($this->model->db);
		$userid = $this->check_validation($_name_mem);
		
		$this->view->info = $this->model->getUserInfo($userid);
		$this->view->username = $_name_mem;
		$this->view->userid = $userid;
		
		$this->view->render('mem/setting',"header_mem");
	}
	
	function mem_update_album($_name_mem) {
		Session::check_login($this->model->db);
		$userid = $this->check_validation($_name_mem);
		
		//get id_album
		if(isset($_GET['id_album']))
				$id_album = $_GET['id_album'];
		else
		{
			$this->redirect_to_user_home($_name_mem);
		}

		if ($userid != ADMINID)
			$this->check_validation_with_album($_name_mem,$id_album); //check album belong to user
		
		//check if it's post edit request
		if($_SERVER['REQUEST_METHOD'] == "POST"){ 
							 
			if (isset($_POST['submit_edit_photos'])) {     //sumit edit photos   
			   $stt = 1;
				while (isset($_POST['stt'.$stt]) && isset($_POST['link'.$stt]))
				{
					$value_stt = $_POST['stt'.$stt];
					$value_link = $_POST['link'.$stt];
					
					//echo $value_stt.$value_link;
					if ($value_stt == "-1")
					{
						if (isset($_POST['cmt'.$stt]))
							$this->model->createNewPhotoAlbum($id_album,$value_link,$_POST['cmt'.$stt],$stt);
					}
					else
					{
						if (isset($_POST['cmt'.$stt]))
						{
							if ($value_link == "del")
							{
								$this->model->removePhotoAlbum($value_stt);
							}
							else
							{
								$this->model->updatePhotoAlbum($value_stt,$value_link,$_POST['cmt'.$stt],$stt);
							}
						}
					}
					$stt = $stt + 1;
				}
			} else 
				if (isset($_POST['submit_story_album'])) {   //submit story
					if (isset($_POST['title_story']) && isset($_POST['content_story']))
					{
						$this->model->updateStoryAlbum($id_album,$_POST['title_story'],$_POST['content_story']);
					}
				} else
					if (isset($_POST['submit_info_album'])) {      // submit info album
					   if (isset($_POST['name_album']) && isset($_POST['link_music']))
					   {
						   $this->model->updateInfoAlbum($id_album,$_POST['name_album'],$_POST['link_music']);
					   }

					}
		}
		
		//load info
		$this->view->username = $_name_mem;
		  
		//thong tin album
		$data_info = $this->model->getInfoAlbum($id_album);
		
		$this->view->title_story = $data_info['title'];
		$this->view->content_story = $data_info['content'];

		//music && name
		$this->view->music_album = $data_info['music'];
		$this->view->name_album = $data_info['name_album'];
		
		//get list photo
		$this->view->photo_album = $this->model->getInfoPhotosAlbum($id_album);
	   
		$this->view->render('mem/update',"header_mem");
	}
	
	function mem_showalbum($name_mem,$id_album) {
		//check valid
		$this->check_validation_with_album($name_mem, $id_album);
		
		//story,name,music
		$data_info = $this->model->getInfoAlbum($id_album);
		if($data_info['title'] == "")
			$this->view->title_story = "Câu chuyện của album";
		else
			$this->view->title_story = $data_info['title'];
			
		if($data_info['content'] == "")
			$this->view->content_story = "( Tác giả đang trong quá trình viết câu chuyện cho album này ^_^ )";
		else
			$this->view->content_story = $data_info['content'];

		//music && name
		if ($data_info['music_embed'] == "")
		{
			$this->view->music_album = "http://www.nhaccuatui.com/l/nxmVCbf0A60J";
			$this->view->is_flash = true;
		}
		else
		{
			$this->view->music_album = $data_info['music_embed'];
			$this->view->is_flash = $data_info['is_flash'];
		}
		$this->view->name_album = $data_info['name_album'];
		
		//photos

		$data_photo = $this->model->getPhotosAlbum($id_album);
		if ($data_photo == NULL){
			$this->view->photo_album="{image : 'https://c2.staticflickr.com/6/5546/14320934804_da7998702a_b.jpg', title : ''}";
			$this->view->share_photo = "https://c2.staticflickr.com/6/5546/14320934804_da7998702a_b.jpg";
		}
		else
		{
			$this->view->photo_album = NULL;
			foreach ($data_photo as $photo)
			{
				$this->view->photo_album = $this->view->photo_album."{image : '".$photo[0]."',title : '".$photo[1]."'},";                    
			}
			$this->view->photo_album[strlen($this->view->photo_album)-1] = ' ';
			$this->view->share_photo = $data_photo[0][0];
		}
		
		//link like fb
		$this->view->fb_like = URL."mem/".$name_mem."/".$id_album."-";
		$this->view->render('mem/show_album');
	}
	
	
	function memGetIDPreview($userid){
		return $this->model->memGetIDPreview($userid);
	}
	
	function requestlogout(){
		Session::session_logout($this->model->db);
		header('location: '.URL.'guest/login');
		exit;
	}
	
	function check_validation($_name_mem){
		$userid = Session::get('userid');
		$name_mem=$this->model->getuser($userid);          
		if ($_name_mem != $name_mem)
		{
			$this->redirect_to_user_home($name_mem);
		}
		return $userid;
	}
	
	function check_validation_with_album($user_name,$id_album)
	{
		$check =  $this->model->check_validation_with_album($user_name,$id_album);
		if ($check == 0 )
			$this->redirect_to_error_page();
	}
	
	function redirect_to_user_home($name_mem)
	{
		header('location:'.URL.'mem/'.$name_mem);                
		exit;
	}
	
	function redirect_to_error_page()
	{
		header('location:'.URL.'error');                
		exit;
	}
}
?>
