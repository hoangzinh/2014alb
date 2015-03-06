<?php

require 'libs/Music/getlink.php';
class Index_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	function get_music_to_play($listen){
		$sth = $this->db->prepare("SELECT value2 FROM ".DB_PREFIX."index
					WHERE `key`=:listen");
		$sth->execute(array(
			':listen' => $listen
		));
		$data = $sth->fetchAll();
		return $data[0][0];
	}

	//function convert link music from table album to table music
	function update_music($from, $to){
		$to = intval($to);
		$from  = intval($from);
		$number = $to - $from;
		$sth = $this->db->prepare("SELECT id_album,music FROM ".DB_PREFIX."list_musics LIMIT $from, $number");
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

	//function update_music_index()
	function update_music_index(){
		$sth = $this->db->prepare("SELECT id,value1 FROM ".DB_PREFIX."index");
		$sth->execute();
		$data = $sth->fetchAll();
		foreach ($data as $row){
			$url_embed = get_link_music_embed($row[1]);
			$sthi = $this->db->prepare("UPDATE ".DB_PREFIX."index SET value2=:music_embed
				WHERE id=:id_album");
			$sthi->execute(array(
				':id_album' => $row[0],
				':music_embed' => $url_embed['data'],
			));
		}
	}
}
?>
