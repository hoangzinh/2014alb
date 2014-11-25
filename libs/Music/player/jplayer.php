	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link href="<?php echo URL; ?>public/thirdparty/jplayer/skin/my.skin/my.skin.css" rel="stylesheet" type="text/css" />
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
			supplied: "mp3",
			wmode: "window",
			smoothPlayBar: true,
			keyEnabled: false,
			loop: true
		});

		setTimeout(function() {
			player.play();
		}, 1000);

		//set current title=current song
		$(".jp-current-song span").html(player.playlist[0].title);
		$("#jquery_jplayer_1").bind($.jPlayer.event.play, function(event) {
		$(".jp-current-song span").html(player.playlist[player.current].title);
		});
	});
	</script>
	<div id="jquery_jplayer_1" class="jp-jplayer"></div>

	<div id="jp_container_1" class="jp-audio">
		<div class="jp-type-playlist">
			<div class="jp-adverstising"></div>
			<div class="jp-current-song">
				<span>Ngay hom qua da tung</span>
				<div class="pull-right"><a href="javascript:;" class="jp-open-playlist">playlist</a></div>
			</div>
			<div class="jp-gui jp-interface">
				<div class="jp-progress">
					<div class="jp-seek-bar">
						<div class="jp-play-bar"></div>
					</div>
				</div>
				<div class="jp-time-holder row-fluid">
					<div class="jp-current-time col-md-6"></div>
					<div class="col-md-6"><div class="jp-duration pull-right"></div></div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<ul class="jp-controls jp-controls-player">
							<li><a href="javascript:;" class="jp-previous" title="Bài trước" tabindex="1">previous</a></li>
							<li><a href="javascript:;" class="jp-play" title="Play" tabindex="1">play</a></li>
							<li><a href="javascript:;" class="jp-pause" title="Tạm dừng" tabindex="1">pause</a></li>
							<li><a href="javascript:;" class="jp-next" title="Bài kế" tabindex="1">next</a></li>
						</ul>
					</div>
					<div class="col-md-6">
						<div class="row">
							<ul class="jp-controls jp-controls-volume">
								<li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
								<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
							</ul>
							<div class="jp-volume-bar col-md-6">
								<div class="jp-volume-bar-value"></div>
							</div>
						</div>
						<div class="jp-toggles pull-right">
						<ul class="jp-controls jp-toggles">
							<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="Chạy lặp">repeat</a></li>
							<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="Tắt chạy lặp">repeat off</a></li>
							<li><a href="javascript:;" class="jp-shuffle" tabindex="1" title="Phát ngẫu nhiên">shuffle</a></li>
							<li><a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="Tắt phát ngẫu nhiên">shuffle off</a></li>
						</ul></div>
					</div>
				</div>
			</div>
			<div class="jp-playlist">
				<ul>
					<li></li>
				</ul>
			</div>
			<div class="jp-no-solution">
				<span>Update Required</span>
				To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
			</div>
		</div>
	</div>

