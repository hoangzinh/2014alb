<?php

require_once('autoloadfb.php');
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\HttpClients\FacebookCurl;
use Facebook\HttpClients\FacebookHttpable;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\Entities\AccessToken;
use Facebook\GraphUser;

// class Album 
// {
// 	public $name;
// 	public $data;
//
// 	public function __construct(){
//
// 	}
// }


class MyFacebook
{
	const APP_ID = '1472242079709457';
	const APP_SECRET = 'e81cc406835917daed2a0b6537a4d026';
	
	private $helper;
	private $session;

	public function __construct()
	{
		@session_start();
		FacebookSession::setDefaultApplication(self::APP_ID, self::APP_SECRET);

		$this->helper = new FacebookRedirectLoginHelper("http://www.album.vn/facebook.php", self::APP_ID, self::APP_SECRET);
	}
	
	public function makeSessionFromRedirect()
	{
		try {
			// $this->session = $this->helper->getSessionFromRedirect();
			$this->session = new FacebookSession('CAAU6ZCxIvOREBAFVDVW0cLTCL63wQggquFx0h1zTtsAXcHMRzxHmBEHScUPQZCrQIZAKpgS1DnMLxeEd1MikOgGNQblToZCIQsktpLPnCPayuLMFXyZCNANPUtsvT916ZAbNpmSbRZBDVXsW5abQ553AAroAJZA2QDVEngZBhzNT2IbKgG7E9ZAqnETrXvAVKKoTFZARdwqConVFbiyUrQO2K95');
			// $session->validate($app_id,$app_secret);
		}
		catch(FacebookRequestException $ex) {
			echo "loi fb1";
		}
		catch(\Exception $ex) {
			echo "loi fb2";
		}

		if (isset($this->session)){
			if ($this->session) {
				// echo $this->session->getToken();
				return true;
			}
		}
		return false;
	}

	public function getLoginUrl(){
		// return $this->helper->getLoginUrl(array(
		//          'scope' => 'email'
		// 	       ));
		return $this->helper->getLoginUrl();
	}
	
	public function destroy()
	{
		//unset($_SESSION);
		session_destroy();
	}

	//FACEBOOK FUNCTION: show all photos this person is tagged in
	public function getAllFBPhotos(){
		$ablum = null;
		try {
			$user_photos = (new FacebookRequest(
				$this->session, 'GET', '/me/photos'
			))->execute()->getgraphobject(graphuser::classname());
			$user_photos = $user_photos->asarray();

			// $album = new Album();
			// $album->name = "Photos";
			foreach($user_photos["data"] as $photo)
			{
				$data[] = array("pic" => $photo->{"picture"}, "src" => $photo->{"source"});
			}
			$album = array("name" => "Photos", "data" => $data);
		} catch(FacebookRequestException $e) {
			echo "Exception occured, code: " . $e->getCode();
			echo " with message: " . $e->getMessage();
		}
		return $album; 
	}

	//FACEBOOK FUNCTION: shows all photos that were published to Facebook by this person
	public function getAllFBAlbums(){
		try {
			$user_album = (new FacebookRequest(
				$this->session, 'GET', '/me/albums'
			))->execute()->getgraphobject(graphuser::classname());
			$user_album = $user_album->asarray();
			foreach($user_album["data"] as $album)
			{
				$name = $album->{"name"};
				$privacy = $album->{"privacy"};
				echo "<p>Album name: $name</p>";
				echo "<p>Album privacy: $privacy</p>";

				$id = $album->{"id"};

				$this->getFBPhotoInAlbum($id);
			}
		} catch(FacebookRequestException $e) {
			echo "Exception occured, code: " . $e->getCode();
			echo " with message: " . $e->getMessage();
		}
	}

	//FACEBOOK FUNCTION: shows all photos in an album that were published to Facebook by this person
	public function getFBPhotoInAlbum($id_album){
		try {
			$user_photos = (new FacebookRequest(
				$this->session, 'GET', "/$id_album/photos"
			))->execute()->getgraphobject(graphuser::classname());
			$user_photos = $user_photos->asarray();
			foreach($user_photos["data"] as $photo)
			{
				$pic = $photo->{"source"};
				echo "<img src='$pic' />";
			}
		} catch(FacebookRequestException $e) {
			echo "Exception occured, code: " . $e->getCode();
			echo " with message: " . $e->getMessage();
		}
	}
	
}
