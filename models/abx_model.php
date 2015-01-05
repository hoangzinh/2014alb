<?php

class Abx_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	function getTotal($table){
		$sth = $this->db->prepare("SELECT COUNT(*) FROM ".DB_PREFIX.$table);
		$sth->execute();
		$data = $sth->fetchAll();
		return $data[0][0];
	}

	function getListAlbumByEmail($email)
	{
		if( $email == "all" )
			$email = "%";
		$sth = $this->db->prepare("SELECT alb.name_album,u.username,alb.id,u.email,alb.date FROM ".DB_PREFIX."list_albums alb,".DB_PREFIX."users u WHERE 
							alb.id_author=u.id AND u.email like :email ORDER BY alb.id DESC");

		$sth->execute(array(
			':email' => $email
		));

		$data = $sth->fetchAll();
		return $data;
	}
 
	function getListPublicAlbum()
	{
		$sth = $this->db->prepare("SELECT alb.name_album,u.username,alb.id,u.email,alb.date FROM ".DB_PREFIX."list_albums alb,".DB_PREFIX."users u WHERE 
							alb.id_author=u.id AND alb.public=1 ORDER BY alb.id DESC");
		$sth->execute();

		$data = $sth->fetchAll();
		return $data;
	}       

	function getUserByEmail($email)
	{
		if( $email == "all" )
			$email = "%";
		$sth = $this->db->prepare("SELECT id,username,email,date FROM ".DB_PREFIX."users WHERE email like :email");
		$sth->execute(array(
			':email' => $email
		));

		$data = $sth->fetchAll();
		return $data;
	}
	
	function getPreviewTable()
	{
			$sth = $this->db->prepare("SELECT id,author,date FROM ".DB_PREFIX."preview");
			$sth->execute();

			$data = $sth->fetchAll();
			return $data;
	}
	
	function deletePreviewTable($id)
	{
			$sth = $this->db->prepare("DELETE FROM ".DB_PREFIX."preview WHERE 
													id <= :id_photo");
			$sth->execute(array(
							':id_photo' => $id
			));
	}
}
