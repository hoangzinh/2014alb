<?php

class Preview extends Controller {

	function __construct() {
		parent::__construct();
                Session::init();
	}
	
	function index() {
            $id = $this->checkValid();
            
            $this->view->title_story = "Câu chuyện của album";
            $this->view->content_story = "( Tác giả đang trong quá trình viết câu chuyện cho album này ^_^ )";
            $this->view->music_album = "1";
            $this->view->photo_album="{image : 'https://c2.staticflickr.com/6/5546/14320934804_da7998702a_b.jpg', title : ''}";
            $this->view->share_photo = "https://c2.staticflickr.com/6/5546/14320934804_da7998702a_b.jpg";
            $this->view->name_album = "Preview";
            $this->view->fb_like = URL;
            
            $data = $this->model->preview($id);
            if ($data != NULL)
            {
                //story
                if($data[0][2] != "")
                    $this->view->title_story = $data[0][2];
                
                if($data[0][3] != "")
                    $this->view->content_story = $data[0][3];
                
                //music
                if($data[0][0] != "")
                    $this->view->music_album = $data[0][0];
                
                //photos
                if($data[0][1] != "")
                    $this->view->photo_album = $data[0][1];
            }
            
            $this->view->render('mem/show_album');
	}
        
        function update() {
            $userid = Session::get('userid');
            if (!isset($_POST['id']))
                return false;
            $id = $_POST['id'];
            
            if($this->model->checkCanPreview($userid,$id) == FALSE)
                return false;
            
            $music = $photo = $title = $content = "";
            
            if (isset($_POST['music']))
                $music = $_POST['music'];
            if (isset($_POST['photo']))
                $photo = $_POST['photo'];
            if (isset($_POST['title']))
                $title = $_POST['title'];
            if (isset($_POST['content']))
                $content = $_POST['content'];
            
            $this->model->update($id,$music,$photo,$title,$content);
	}
        
        function checkValid(){
            $userid = Session::get('userid');
            if (!isset($_GET['id']))
                $this->redirect_to_error_page();
            $id = $_GET['id'];
            
            if($this->model->checkCanPreview($userid,$id) == FALSE)
                $this->redirect_to_error_page();
            return $id;
        }
        
        function redirect_to_error_page()
        {
            header('location:'.URL.'error');                
            exit;
        }
}