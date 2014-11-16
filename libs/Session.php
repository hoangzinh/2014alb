<?php

class Session
{
	
	public static function init()
	{
		@session_start();
	}
	
	public static function set($key, $value)
	{
		$_SESSION[$key] = $value;
	}
	
	public static function get($key)
	{
		if (isset($_SESSION[$key]))
		return $_SESSION[$key];
	}
	
	public static function destroy()
	{
		//unset($_SESSION);
		session_destroy();
	}

	public static function check_login($db,$redirect_mem = FALSE,$redirect_login = TRUE){
		Session::init();
		$logged = Session::get('loggedIn');
		if ($logged)
		{
			if ($redirect_mem)
			{
				header('location: '.URL.'mem/abc');
				exit;
			}else
				return true;
		}elseif(isset($_COOKIE['remember'])){
			$token = $_COOKIE['remember']; 
			$sth = $db->prepare("SELECT id FROM ".DB_PREFIX."users WHERE 
					token = :token");
			$sth->execute(array(
					':token' => $token
			));

			$result = $sth->fetchAll();

			if ($result != NULL) {
				// login
				Session::refresh_session_login($db,$result[0]['id']);
				if ($redirect_mem)
				{
					header('location: '.URL.'mem/abc');
					exit;
				}else
					return true;
			}
		}
		if ($redirect_login){
			Session::destroy();
			header('location:'.URL.'guest/login');
			exit;
		}
	}

	public static function refresh_session_login($db,$userid){
		Session::init();
		Session::set('loggedIn', true);
		Session::set('userid', $userid);
		$newtoken = md5(uniqid(rand(), true));
		$expire = time()+3600*24*30;
		setcookie('remember', $newtoken, $expire, '/', URLCOOKIE, isset($_SERVER["HTTPS"]), true);
		$sth = $db->prepare("UPDATE ".DB_PREFIX."users SET 
				token = :token WHERE 
							id = :user_id");
		$sth->execute(array(
				':user_id'    => $userid,
				':token'     => $newtoken
		));
	}

	public static function session_logout($db){
		Session::init();
		$userid = Session::get('userid');
		Session::destroy();
		$newtoken = md5(uniqid(rand(), true));
		$expire = time()- 3600*24*365;
		setcookie('remember', '', $expire, '/', URLCOOKIE, isset($_SERVER["HTTPS"]), true);
		$sth = $db->prepare("UPDATE ".DB_PREFIX."users SET 
				token = :token WHERE 
							id = :user_id");
		$sth->execute(array(
				':user_id'    => $userid,
				':token'     => $newtoken
		));
	}
}
