<?php

class Preview_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
                
	}
        
        public function checkCanPreview($userid,$id){
            $sth = $this->db->prepare("SELECT id FROM ".DB_PREFIX."preview WHERE 
                                id = :id AND author = :author");
            $sth->execute(array(
                    ':id' => $id,
                    ':author' => $userid
            ));

            $count =  $sth->rowCount();
            
            if ($count > 0)
                return TRUE;
            else
                return FALSE;
        }
        
        public function update($id,$music,$photo,$title,$content){
            $url_embed = $this->getURLembed($music);
            
            $sth = $this->db->prepare("UPDATE ".DB_PREFIX."preview SET 
				music = :link_music, photo = :photo,title_story = :title,content_story = :content WHERE 
                                id = :id_album");
            $sth->execute(array(
                    ':id_album' => $id,
                    ':link_music' => $url_embed,
                    ':photo' => $photo,
                    ':title' => $title,
                    ':content' => $content
            ));
        }
        
        
        public function preview($id){
            $sth = $this->db->prepare("SELECT music,photo,title_story,content_story FROM ".DB_PREFIX."preview WHERE 
                                id = :id");
            $sth->execute(array(
                    ':id' => $id
            ));

            $count =  $sth->rowCount();
            $data = $sth->fetchAll();
            if ($count > 0)
                return $data;
            else
                return NULL;
        }


//function 
        function nice_url($url) {
            if((strpos($url, "http://") === false)
                && (strpos($url, "https://") === false)) {
                    $url = "http://$url";
            }

            return $url;

        }
        function _viewSource($url){ 
            ob_start();
            $url = $this->nice_url($url);
            $parse_url = parse_url($url); 
            $headers = array("Host: {$parse_url['host']}"); 
            $ch = curl_init(); 
            curl_setopt($ch, CURLOPT_URL,$url); 
            //curl_setopt($ch, CURLOPT_USERAGENT,"Mozilla/5.0 (Linux; U; Android 4.0.3; ko-kr; LG-L160L Build/IML74K) AppleWebkit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30"); 
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); 
            curl_setopt($ch, CURLOPT_REFERER, $url); 
            curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate'); 
            curl_setopt($ch, CURLOPT_HEADER, false); 
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            $result = curl_exec($ch); 
            curl_close($ch); 
            //ob_end_clean();
            return $result; 
        }
        function getURLembed($url){
            $page = $this->_viewSource($url);
            
            $pos = strpos($page,'<link rel="video_src"');
            echo "0";
            if (false === $pos)
                return $url;
            echo "1";
            $pos = strpos($page,"http",$pos);
            if (false === $pos)
                return $url;
            echo "2";
            $pos_e = strpos($page,'"',$pos);
            if ($pos_e === false)
                return $url;
            echo "3";
            $url_embed = substr($page,$pos,$pos_e - $pos);
            
            return $url_embed;
        }
}