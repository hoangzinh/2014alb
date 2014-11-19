<?php
$content_user_wanna_listen = NULL;
$tmp_content = NULL;
if(isset($_GET['thuongthuc']))
{	
	switch ($_GET['thuongthuc'])
	{
	case "westlife":
		$tmp_content = "http://www.nhaccuatui.com/l/4LXuOnCrC52Y";
		break;
	case "BB":
		$tmp_content = "http://www.nhaccuatui.com/l/yb5OYT0TlxoH";
		break;
	case "nhac-giao-huong":
		$tmp_content = "http://www.nhaccuatui.com/l/2tXdMJwO3Flu";
		break;
	case "happy-birthday":
		$tmp_content = "http://www.nhaccuatui.com/l/2OkKXBCCOOMV";
		break;
	case "nhac-mua":
		$tmp_content = "http://www.nhaccuatui.com/l/Y69MH09GgNSD";
		break;	
	case "loi-cua-song":
		$tmp_content = "http://mp3.zing.vn/embed/album/IWFZ88DA";
		break;	
	case "nhac-san":
		$tmp_content = "http://www.nhaccuatui.com/l/cH6J7AYRD0U6";
		break;	
	case "michael-jackson":
		$tmp_content = "http://www.nhaccuatui.com/l/2pzsCcbLYtLw";
		break;	
	case "bich-phuong":
		$tmp_content = "http://www.nhaccuatui.com/l/lELWsAZLnpWy";
		break;	
	case "guitar":
		$tmp_content = "http://www.nhaccuatui.com/l/mYSxXGEXmBEI";
		break;
	case "piano":
		$tmp_content = "http://www.nhaccuatui.com/l/nxmVCbf0A60J";
		break;	
	case "sao-tieu-dao":
		$tmp_content = "http://www.nhaccuatui.com/l/voXFCz2W13UN";
		break;
	case "nhac-au-mi":
		$tmp_content = "http://www.nhaccuatui.com/l/ymBq8HMZe5SZ";
		break;	
	case "tinh-yeu":
		$tmp_content = "http://www.nhaccuatui.com/l/tuvRK5jDA9tc";
		break;
	case "tuoi-hoc-tro":
		$tmp_content = "http://www.nhaccuatui.com/l/o3wdcLetm2gf";
		break;
	case "dong-que":
		$tmp_content = "http://www.nhaccuatui.com/l/Y9qURLLYTZzd";
		break;
	case "nhac-han":
		$tmp_content = "http://www.nhaccuatui.com/l/g3rPRJtEnK8C";
		break;
	case "rock":
		$tmp_content = "http://www.nhaccuatui.com/l/JsuN0WbBODaS";
		break;
	case "rap":
		$tmp_content = "http://www.nhaccuatui.com/l/H3MzxK7Q70Yo";
		break;
	case "anh-nho-em":
		$tmp_content = "http://www.nhaccuatui.com/l/Po3d7OH80Cmd";
		break;
	case "em-nho-anh":
		$tmp_content = "http://www.nhaccuatui.com/l/K1Uw2poJmiTA";
		break;
	case "top-viet":
		$tmp_content = "http://www.nhaccuatui.com/l/55KLyo5hUsCu";
		break;
	}		
}
if ($tmp_content == NULL)
{
	$tmp_content = "http://www.nhaccuatui.com/l/mYSxXGEXmBEI"; 
}

$content_user_wanna_listen = '<embed src="'.$tmp_content.'" flashvars="target=blank&autostart=true" allowscriptaccess="always" allowfullscreen="true" quality="high" wmode="transparent" type="application/x-shockwave-flash" width="420" height="286"></embed>';
?>
