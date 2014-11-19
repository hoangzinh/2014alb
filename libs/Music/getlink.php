<?php
	ob_start();
	define("UNDEFINE", 0);
	define("NHACCUATUI", 1);
	define("ZING", 2);
	define("CHIASENHAC", 3);
	define("YEUCAHAT", 4);

	function get_link_music_embed($url){
		$site = get_site_music($url);

		switch ($site){
		case NHACCUATUI:
			$url_embed = get_music_from_nhaccuatui($url);
			break;
		case ZING:
			$url_embed = get_music_from_zing($url);
			break;
		case CHIASENHAC:
			$url_embed = get_music_default($url);
			break;
		case YEUCAHAT:
			$url_embed = get_music_from_yeucahat($url);
			break;
		default:
			$url_embed = get_music_default($url);
		}
		return $url_embed;
	}

	function get_site_music($url){
		if(strpos($url, "nhaccuatui.com") !== false)
			return NHACCUATUI;
		if(strpos($url, "mp3.zing.vn") !== false)
			return ZING;
		if(strpos($url, "chiasenhac.com") !== false)
			return CHIASENHAC;
		if(strpos($url, "yeucahat.com") !== false)
			return YEUCAHAT;

		return UNDEFINE;

	}

	function get_music_from_nhaccuatui($url){
		$page = _viewSource($url);

		$pos = strpos($page, "file=http");
		if($pos === false)
			return get_music_default($url);
		$pos = strpos($page, "http",$pos);
		$pos_end = strpos($page,"\"",$pos);
		if($pos_end === false)
			return get_music_default($url);

		$xml = substr($page,$pos,$pos_end - $pos);
		$page = _viewSource($xml);
		$songs = parse_xml_music($page);
		if(!$songs)
			return get_music_default($url);

		$data = NULL;
		foreach ($songs->track as $song){
			$title = normalize_string_music($song->title);
			$src = normalize_string_music($song->location);
			$data .= '{title:"'.$title.'",mp3:"'.$src.'"},';
		}
		$data[strlen($data) - 1]= ' ';
		return encapsulate_info_music($data,0);
	}

	function get_music_from_zing($url){
		$page = _viewSource($url);

		$pos = strpos($page, "xmlURL=http");
		if($pos === false)
			return get_music_default($url);
		$pos = strpos($page, "http",$pos);
		$pos_end = strpos($page,"&",$pos);
		if($pos_end === false)
			return get_music_default($url);

		$xml = substr($page,$pos,$pos_end - $pos);
		$page = _viewSource($xml);
		$songs = parse_xml_music($page);
		if(!$songs)
			return get_music_default($url);

		$data = NULL;
		foreach ($songs->item as $song){
			$title = normalize_string_music($song->title);
			$src = normalize_string_music($song->source);
			$data .= '{title:"'.$title.'",mp3:"'.$src.'"},';
		}
		$data[strlen($data) - 1]= ' ';
		return encapsulate_info_music($data,0);
	}

	function get_music_from_yeucahat($url){
		$page = _viewSource($url);
		$pos = strpos($page, "audioUrl=");
		if($pos === false)
			return get_music_default($url);
		$pos = strpos($page, "http",$pos);
		$pos_end = strpos($page,"&autoPlay",$pos);
		if($pos_end === false)
			return get_music_default($url);
		$src = substr($page,$pos,$pos_end - $pos);

		//title
		$title = "album.ocdao.net";
		$pos = strpos($page, "maintitle");
		if($pos !== false)
		{
			$pos = strpos($page, ">",$pos);
			if($pos !== false)
			{
				$pos_end = strpos($page,"<",$pos);
				if($pos_end !== false){
					$title = substr($page,$pos+1,$pos_end - $pos -1);
				}
			}
		}
			
		$data = '{title:"'.$title.'",mp3:"'.urldecode($src).'"}';
		return encapsulate_info_music($data,0);
	}

	function get_music_default($url){
		return encapsulate_info_music('{title:"lấy SAI link nhạc rồi",mp3:""}',0);
	}

	function encapsulate_info_music($data,$is_flash){
		return array(
			"data" => $data,
			"is_flash" => $is_flash,
		);
	}

	function normalize_string_music($string){
		return trim(preg_replace('/\s\s+/', ' ', $string));
	}

	function parse_xml_music($data){
		libxml_use_internal_errors(true);
		if (function_exists("libxml_disable_entity_loader"))
			libxml_disable_entity_loader(true);
		$result = simplexml_load_string($data, null, LIBXML_NONET);
		if (!$result) {
			libxml_clear_errors();
		}
		return $result;
	}

	function nice_url($url) {
		if((strpos($url, "http://") === false)
			&& (strpos($url, "https://") === false)) {
				$url = "http://$url";
		}
		return $url;
	}

	function _viewSource($url){ 
		$url = nice_url($url);
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
?> 
