<?php

class Index_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	//function convert link music from table album to table music
	function update_music(){
		require 'libs/Music/getlink.php';
		$sth = $this->db->prepare("SELECT id_album,music FROM ".DB_PREFIX."list_musics");
		$sth->execute();
		$data = $sth->fetchAll();
		foreach ($data as $row){
			$url_embed = get_link_music_embed($row['music']);
			$sthi = $this->db->prepare("UPDATE ".DB_PREFIX."list_musics SET music_embed=:music_embed,is_flash=:is_flash 
				WHERE id_album=:id_album");
			$sthi->execute(array(
				':id_album' => $row['id_album'],
				':music_embed' => $url_embed['data'],
				':is_flash' => $url_embed['is_flash']
			));
		}
	}
}
?>
