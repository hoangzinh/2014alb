<?php
require 'libs/Music/getlink.php';

class Mem_Model extends Model
{
	public function __construct()
	{
            parent::__construct();
	}


        //-----------------------get info user-------------------------
        function getuser($userid)
        {
            $sth = $this->db->prepare("SELECT username FROM ".DB_PREFIX."users WHERE
				id = :id");
            $sth->execute(array(
                    ':id' => $userid
            ));

            $data = $sth->fetchAll();
            return $data[0]['username'];
        }

        function getuserid($username)
        {
            $sth = $this->db->prepare("SELECT id FROM ".DB_PREFIX."users WHERE
				username = :username");
            $sth->execute(array(
                    ':username' => $username
            ));

            $data = $sth->fetchAll();
            if ($data == NULL)
                return NULL;
            return $data[0]['id'];
		}

		function getUserInfo($userid){
			$sth = $this->db->prepare("SELECT username,email FROM ".DB_PREFIX."users WHERE
				id = :id");
            $sth->execute(array(
                    ':id' => $userid
            ));

            $data = $sth->fetchAll();
            return $data;
		}

        function getListAlbum($userid)
        {
            $sth = $this->db->prepare("SELECT id,name_album,public,date FROM ".DB_PREFIX."list_albums WHERE
				id_author = :id_author ORDER BY id DESC");
            $sth->execute(array(
                    ':id_author' => $userid
            ));

            $data = $sth->fetchAll();
            return $data;
        }

        //-----------------------get info album-------------------------
        function getInfoAlbum($id_album)
        {
			$sth = $this->db->prepare("SELECT alb.name_album,mu.music,mu.music_embed,st.title,st.content
				FROM ".DB_PREFIX."list_albums alb LEFT JOIN ".DB_PREFIX."list_musics mu ON alb.id = mu.id_album LEFT JOIN ".DB_PREFIX."story_album st ON alb.id = st.id_album
				WHERE alb.id= :id_album");
            $sth->execute(array(
                    ':id_album' => $id_album
            ));

            $data = $sth->fetchAll();
			return $data[0];
		}

        function getNameAndMusicAlbum($id_album)
        {
            $sth = $this->db->prepare("SELECT name_album,music FROM ".DB_PREFIX."list_albums WHERE
				id = :id_album");
            $sth->execute(array(
                    ':id_album' => $id_album
            ));

            $data = $sth->fetchAll();
            return $data;
        }

        function getPhotosAlbum($id_album)
        {
            $sth = $this->db->prepare("SELECT link,comment FROM ".DB_PREFIX."list_photos WHERE
				id_album = :id_album ORDER BY stt_photo ASC");
            $sth->execute(array(
                    ':id_album' => $id_album
            ));

            $data = $sth->fetchAll();
            return $data;
        }

        function getInfoPhotosAlbum($id_album)
        {
            $sth = $this->db->prepare("SELECT id,link_orig,comment FROM ".DB_PREFIX."list_photos WHERE
				id_album = :id_album ORDER BY stt_photo ASC");
            $sth->execute(array(
                    ':id_album' => $id_album
            ));

            $data = $sth->fetchAll();
            return $data;
        }


        //edit function
        function updateInfoAlbum($id_album,$name_album,$link_music)
        {
            $sth = $this->db->prepare("UPDATE ".DB_PREFIX."list_albums SET
				name_album = :name_album WHERE
                                id = :id_album");
            $sth->execute(array(
                    ':id_album' => $id_album,
                    ':name_album' => $name_album
				));

			$url_embed = get_link_music_embed($link_music);
			$sth = $this->db->prepare("UPDATE ".DB_PREFIX."list_musics SET
				music = :music,music_embed = :music_embed, is_flash = :is_flash WHERE
                                id_album = :id_album");
            $sth->execute(array(
                    ':id_album' => $id_album,
					':music' => $link_music,
					':music_embed' => $url_embed['data'],
					':is_flash' => $url_embed['is_flash']
			));
        }

        function updateStoryAlbum($id_album,$title_story,$content_story)
        {
            $sth = $this->db->prepare("UPDATE ".DB_PREFIX."story_album SET
				title = :title_story , content = :content_story WHERE
                                id_album = :id_album");
            $sth->execute(array(
                    ':id_album' => $id_album,
                    ':title_story' => $title_story,
                    ':content_story' => $content_story,
            ));
        }


        function updatePhotoAlbum($id,$link_orig,$cmt,$stt)
		{
			$link = $this->getURLPhoto($link_orig);
			$cmt = $this->normalizeStringSave($cmt);
            $sth = $this->db->prepare("UPDATE ".DB_PREFIX."list_photos SET
				link_orig = :link_orig ,link = :link , comment = :comment, stt_photo = :stt WHERE
                                id = :id_photo");
            $sth->execute(array(
                    ':id_photo' => $id,
                    ':link_orig' => $link_orig,
                    ':link' => $link,
                    ':comment' => $cmt,
                    ':stt' => $stt
            ));
        }

        function removePhotoAlbum($id)
        {
            $sth = $this->db->prepare("DELETE FROM ".DB_PREFIX."list_photos WHERE
                                id = :id_photo");
            $sth->execute(array(
                    ':id_photo' => $id
            ));
        }


        //--------------create new album---------------
        function createNewAlbum($id_user,$name_album)
        {
            //create new album in list album
            $sth = $this->db->prepare("INSERT INTO ".DB_PREFIX."list_albums
                            (`id_author` ,`name_album`) VALUES
                            (:id_author,:name_album)");
            $sth->execute(array(
                    ':id_author'     => $id_user,
                    ':name_album'    => $name_album
            ));

            return $this->db->getInsertID();
        }

        function createNewStoryAlbum($id_album,$title,$content)
        {
            //create new album in list album
            $sth = $this->db->prepare("INSERT INTO ".DB_PREFIX."story_album VALUES
                            (:id_album,:title,:content)");
            $sth->execute(array(
                    ':id_album'     => $id_album,
                    ':title'    => $title,
                    ':content'         => $content,
            ));
        }

        function createNewPhotoAlbum($id_album,$link_orig,$cmt,$stt)
		{
			$link = $this->getURLPhoto($link_orig);
			$cmt = $this->normalizeStringSave($cmt);
            $sth = $this->db->prepare("INSERT INTO ".DB_PREFIX."list_photos
                            (`id_album` ,`stt_photo`,`link_orig`,`link` ,`comment`) VALUES
                            (:id_album,:stt,:link_orig,:link,:cmt)");
            $sth->execute(array(
                    ':id_album'     => $id_album,
                    ':link_orig'    => $link_orig,
                    ':link'    => $link,
                    ':cmt'         => $cmt,
                    ':stt' =>$stt
            ));
		}

		function createNewMusicAlbum($id_album,$linkmusic){
			$url_embed = get_link_music_embed($linkmusic);
			//create new album in list album
			$sth = $this->db->prepare("INSERT INTO ".DB_PREFIX."list_musics
						(`id_album` ,`music`,`music_embed`,`is_flash`) VALUES
						(:id_album,:music,:music_embed,:is_flash)");
			$sth->execute(array(
					':id_album'     => $id_album,
					':music'         => $linkmusic,
					':music_embed'   => $url_embed['data'],
					':is_flash'     =>  $url_embed['is_flash']
			));
		}


        //delete album
        function deleteAlbum($id_album)
        {
            //create new album in list album
            $sth = $this->db->prepare("DELETE FROM ".DB_PREFIX."list_albums WHERE
                            id = :id_album");
            $sth->execute(array(
                    ':id_album'     => $id_album
            ));
        }

        function deleteStoryAlbum($id_album)
        {
            //create new album in list album
            $sth = $this->db->prepare("DELETE FROM ".DB_PREFIX."story_album WHERE
                            id_album = :id_album");
            $sth->execute(array(
                    ':id_album'     => $id_album
            ));
        }

        function deletePhotoyAlbum($id_album)
        {
            //create new album in list album
            $sth = $this->db->prepare("DELETE FROM ".DB_PREFIX."list_photos WHERE
                            id_album = :id_album");
            $sth->execute(array(
                    ':id_album'     => $id_album
            ));
        }


        function memGetIDPreview($userid){
            $sth = $this->db->prepare("INSERT INTO ".DB_PREFIX."preview
                            (`author`) VALUES
                            (:author)");
            $sth->execute(array(
                    ':author'     => $userid
            ));

            return $this->db->getInsertID();
        }


		// FB function
		function publicFBPage($id_album){
			$sth = $this->db->prepare("UPDATE ".DB_PREFIX."list_albums SET
				public=1 WHERE id = :id_album");
            $sth->execute(array(
                    ':id_album' => $id_album
            ));
		}

        //check
        function check_validation_with_album($user_name,$id_album)
        {
            // $sth = $this->db->prepare("SELECT id FROM ".DB_PREFIX."list_albums WHERE
			// id = :id_album AND id_author = :id_author");
			$sth = $this->db->prepare("SELECT u.username,alb.id FROM album_list_albums alb,album_users u WHERE
											alb.id_author=u.id and u.username=:username and alb.id=:id_album");
            $sth->execute(array(
                    ':id_album' => $id_album,
                    ':username' => $user_name
            ));

            $count =  $sth->rowCount();
            return $count;
        }

		//function
		function normalizeStringSave($cmt){
			$cmt = str_replace("'","\'",$cmt);
			return $cmt;
		}
		static function normalizeStringLoad($cmt){
			$cmt = str_replace("\'","'",$cmt);
			return $cmt;
		}

        function nice_url($url) {
            if((strpos($url, "http://") === false)
                && (strpos($url, "https://") === false)) {
                    $url = "http://$url";
            }

            return $url;

		}

        function _viewSource($url){
            $url = $this->nice_url($url);
            $parse_url = parse_url($url);
            $headers = array("Host: {$parse_url['host']}");
            ob_start();
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL,$url);
            curl_setopt($ch, CURLOPT_USERAGENT,"Mozilla/5.0 (Linux; U; Android 4.0.3; ko-kr; LG-L160L Build/IML74K) AppleWebkit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30");
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_REFERER, $url);
            curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate');
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result = curl_exec($ch);
            curl_close($ch);
            ob_end_clean();
            return $result;
		}

        function getURLembed($url){
            $page = $this->_viewSource($url);

            $pos = strpos($page,'<link rel="video_src"');
            if (false === $pos)
                return $url;
            $pos = strpos($page,"http",$pos);
            if (false === $pos)
                return $url;
            $pos_e = strpos($page,'"',$pos);
            if ($pos_e === false)
                return $url;
            $url_embed = substr($page,$pos,$pos_e - $pos);

            return $url_embed;
        }

		function getURLPhoto($url){
			$pos = strpos($url, "facebook.com/photo.php");
			if ($pos === false) {
				return $url;
			}
			$url_default="https://farm4.staticflickr.com/3896/15118916110_d2fc262ca8_b.jpg";
			$source = $this->_viewSource($url);
			$pos = strpos($source,"id=\"fbPhotoImage\"");
			if ($pos === false){
				return $url_default;
			}

			$pos = strpos($source,"http",$pos);
			if ($pos === false)
				return $url_default;

			$pos_end = strpos($source,"\"",$pos);
			if ($pos_end === false)
				return $url_default;

			$url_photo = substr($source,$pos,$pos_end - $pos);
			return $url_photo;
		}
}
?>
