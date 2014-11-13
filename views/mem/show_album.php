<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Ốc đảo Album - <?php echo $this->name_album; ?></title>   
    <link rel="shortcut icon" href="../../public/images/album.ico" />
    <meta name="keywords" content="am nhac,album, oc dao" />
    <meta name="description" content=Tao Album tu hinh va nhac theo cach cua ban" />
    <meta property="og:image" content="<?php echo $this->share_photo; ?>" />
    <meta property="og:description" content="Tạo những ALBUM thật dễ thương từ HÌNH và NHẠC để tặng cho người mà bạn yêu quý" />


    <link rel="stylesheet" href="<?php echo URL; ?>public/css/gallery_css/supersized.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/gallery_css/supersized.shutter.css" type="text/css" media="screen" />
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
    <script type="text/javascript" src="<?php echo URL; ?>public/js/gallery_js/jquery.easing.min.js"></script>

    <script type="text/javascript" src="<?php echo URL; ?>public/js/gallery_js/supersized.3.2.7.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/gallery_js/supersized.shutter.min.js"></script>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;subset=latin,vietnamese" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Sofia:400,600,700&amp;subset=latin,vietnamese" rel="stylesheet" type="text/css">

    <link href="<?php echo URL; ?>public/css/indexphoto_music.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo URL; ?>public/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/imageflow.packed.css" type="text/css" />

    <script type="text/javascript" src="<?php echo URL; ?>public/js/imageflow.js"></script>	
    <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript" src="<?php echo URL; ?>public/js/indexphoto_music.js"></script>	    
	<script src="<?php echo URL; ?>public/js/facebook.js"></script>

	<?php if (!$this->is_flash){ ?>
	<link href="<?php echo URL; ?>public/thirdparty/jplayer/skin/blue.monday/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="<?php echo URL; ?>public/thirdparty/jplayer/js/jquery.jplayer.min.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public/thirdparty/jplayer/js/jplayer.playlist.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	
		player = new jPlayerPlaylist({
			jPlayer: "#jquery_jplayer_1",
			cssSelectorAncestor: "#jp_container_1"
		}, [
	<?php echo $this->music_album; ?>
		], {
		swfPath: "<?php echo URL; ?>public/thirdparty/jplayer/js",
			supplied: "oga, mp3",
			wmode: "window",
			smoothPlayBar: true,
			keyEnabled: false,
			loop: true 
		});

		setTimeout(function() {
			player.play();
		}, 1000);
	});
	</script>
	<?php } ?>
</head>
<body>
<div id="fb-root"></div>

<div id="fb-like-share">
<div class="fb-like" data-href="<?php echo $this->fb_like; ?>" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"></div>
</div>

<div id="fb-like-panpage" class="fanpage-like">
<div class="fb-like-box" data-href="https://www.facebook.com/fanpageocdao" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="false" data-show-border="false"></div>
</div>

<div id="home" ><a target="_blank" href='<?php echo URL ?>guest/login' title="Tạo album cho riêng mình"><img src="<?php echo URL; ?>/public/img/home.png" alt="home" /></a></div>

<!--Get content-->
<script type='text/javascript'>			
jQuery(function($){
    $.supersized({

        // Functionality
        slide_interval          :   7000,		// Length between transitions
        transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
        fit_always                            :       1,
        transition_speed		:	700,		// Speed of transition
        stop_loop               : 0,
        image_path				:	"http://album.ocdao.net/public/img",										   
        // Components							
        slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
        slides 					:  	[<?php echo $this->photo_album; ?>]									
    });
});
</script>

<div class="tab-container">

<ul class='etabs'>	
        <li class='tab'><a href='#tab2' title="Lời muốn nói về Album"><img src="<?php echo URL; ?>public/img/comment.png" alt="Comment" /></a></li>
	<li class='tab'><a href='#tab1' title="Mở playlist nhạc"><img src="<?php echo URL; ?>public/img/playlist.png" alt="Playlist" /></a></li>
	<li class='tab'><a href='#tab3' title="Cánh cửa thần kì"><img src="<?php echo URL; ?>public/img/plane.png" alt="Wanna-go" /></a></li>
        <li class='tab-close'><a href='#tab-close' title="Tắt tab">x</a></li>
</ul>
   
<div id="tab-container" >
    
<div id='tab1' class='tab-id center'>
<?php
   // echo '<embed src="'.$this->music_album.'" flashvars="target=blank&autostart=true" allowscriptaccess="always" allowfullscreen="true" quality="high" wmode="transparent" type="application/x-shockwave-flash" width="420" height="286"></embed>';
?>
<?php
	if ($this->is_flash)
		require 'libs/Music/player/flash.php';
	else
		require 'libs/Music/player/jplayer.php';
?>
</div>

<div id='tab2' class='tab-id center'>
<div id='info_music'>
    <?php
    echo '<h4 id="info_title" ><img src="'.URL.'public/images/info_pen4.png" width="25" height="25"/> '.$this->title_story.'</h4>';
    echo '<p>'.$this->content_story.'</p>';
    ?>
    
</div>
<div id='info_cmt'>
<?php
    echo '<div class="fb-comments" data-href="'.$this->fb_like.'" data-width="300" data-numposts="5" data-colorscheme="light"></div>';
?>
</div>
</div>
<div id='tab3' class='tab-id center'>
	<center>
	<h3 class="title-tag"> Tôi muốn đến </h3>
		<div id="myImageFlow" class="imageflow">
			<img src="img/rain.jpg" width="100" height="100" alt="Vùng đất của mưa" tag-id="vung-dat-cua-mua" />
			<img src="img/song-bien.jpg" width="100" height="100" alt="Vùng đất của biển" tag-id="vung-dat-cua-bien" />
			<img src="img/hanoi_m.jpg" width="100" height="100" alt="Hà Nội" tag-id="ha-noi" />
			<img src="img/saigon.jpg" width="100" height="100" alt="Sài Gòn" tag-id="sai-gon" />
			<img src="img/mientay.jpg" width="100" height="100" alt="Miền tây" tag-id="mien-tay" />
			<img src="img/chauau.jpg" width="100" height="100" alt="Châu Âu" tag-id="chau-au" />
			<img src="img/dong_que.jpg" width="100" height="100" alt="Đồng quê" tag-id="dong-que" />
			<img src="img/doremon.jpg" width="100" height="100" alt="Doraemon Nobita" tag-id="doraemon-nobita" />
			<img src="img/doinui.jpg" width="100" height="100" alt="Đồi Núi" tag-id="doi-nui" />
			<img src="img/thoithoau.jpg" width="100" height="100" alt="Thời thơ-ấu" tag-id="thoi-tho-au" />
			<img src="img/20tuoi.jpg" width="100" height="100" alt="20 tôi nên làm gì" tag-id="20-toi-lam-gi" />
		</div>
	<h3 class="title-tag"> và thưởng thức </h3>
	<ul id="list-choice-music-tag">
		<li class="music-tag" alt="top-viet"><img src="<?php echo URL; ?>public/img/music-icon.png" alt=music" />Top Việt</li>
		<li class="music-tag" alt="westlife"><img src="<?php echo URL; ?>public/img/music-icon.png" alt=music" />Westlife</li>
		<li class="music-tag" alt="BB"><img src="<?php echo URL; ?>public/img/music-icon.png" alt=music" />Backstreet Boy</li>
		<li class="music-tag" alt="nhac-giao-huong"><img src="<?php echo URL; ?>public/img/music-icon.png" alt=music" />nhạc Giao Hưởng</li>
		<li class="music-tag" alt="happy-birthday"><img src="<?php echo URL; ?>public/img/music-icon.png" alt=music" />Happy Birthday</li>
		<li class="music-tag" alt="nhac-mua"><img src="<?php echo URL; ?>public/img/music-icon.png" alt=music" />nhạc Mưa</li>
		<li class="music-tag" alt="loi-cua-song"><img src="<?php echo URL; ?>public/img/music-icon.png" alt=music" />lời của Sóng</li>
		<li class="music-tag" alt="nhac-san"><img src="<?php echo URL; ?>public/img/music-icon.png" alt=music" />nhạc sàn</li>
		<li class="music-tag" alt="michael-jackson"><img src="<?php echo URL; ?>public/img/music-icon.png" alt=music" />Michael Jackson</li>
		<li class="music-tag" alt="bich-phuong"><img src="<?php echo URL; ?>public/img/music-icon.png" alt=music" />Bích Phương</li>
		<li class="music-tag" alt="guitar"><img src="<?php echo URL; ?>public/img/music-icon.png" alt=music" />Guitar</li>
		<li class="music-tag" alt="piano"><img src="<?php echo URL; ?>public/img/music-icon.png" alt=music" />Piano</li>
		<li class="music-tag" alt="sao-tieu-dao"><img src="<?php echo URL; ?>public/img/music-icon.png" alt=music" />Sáo tiêu dao</li>
		<li class="music-tag" alt="nhac-au-mi"><img src="<?php echo URL; ?>public/img/music-icon.png" alt=music" />nhạc Âu Mĩ</li>
		<li class="music-tag" alt="tinh-yeu"><img src="<?php echo URL; ?>public/img/music-icon.png" alt=music" />Tình yêu</li>
		<li class="music-tag" alt="tuoi-hoc-tro"><img src="<?php echo URL; ?>public/img/music-icon.png" alt=music" />Tuổi học trò</li>
		<li class="music-tag" alt="dong-que"><img src="<?php echo URL; ?>public/img/music-icon.png" alt=music" />nhạc đồng quê</li>		
		<li class="music-tag" alt="nhac-han"><img src="<?php echo URL; ?>public/img/music-icon.png" alt=music" />nhạc Hàn</li>
		<li class="music-tag" alt="rock"><img src="<?php echo URL; ?>public/img/music-icon.png" alt=music" />ROCK</li>
		<li class="music-tag" alt="rap"><img src="<?php echo URL; ?>public/img/music-icon.png" alt=music" />RAP</li>
		<li class="music-tag" alt="anh-nho-em"><img src="<?php echo URL; ?>public/img/music-icon.png" alt=music" />Anh nhớ Em</li>
		<li class="music-tag" alt="em-nho-anh"><img src="<?php echo URL; ?>public/img/music-icon.png" alt=music" />Em nhớ Anh</li>
	</ul>
	
	<div id="btnPlayNow" class ="button">
		<img src="<?php echo URL; ?>public/img/plane.png" alt=play" />
		Play Now
	</div>
	<p class="error-tag">(*) Vui lòng chọn album nhạc muốn thưởng thức</p>
	</center>
</div>
</div>
</div> <!--End div tabs-container-->

<div id="slidecaption" ></div>

<!--Time Bar-->
<div id="progress-back" class="load-item">
	<div id="progress-bar"></div>
</div>

<!--Control Bar-->
<div id="controls-wrapper" class="load-item">
	<div id="controls">
		
		<a id="play-button"><img id="pauseplay" src="<?php echo URL; ?>public/img/pause.png"/></a>
		
		<!--Slide captions displayed here-->
		
		
		<!--Navigation-->
		<ul id="slide-list"></ul>
		
	</div>
</div>

</body>
</html>
