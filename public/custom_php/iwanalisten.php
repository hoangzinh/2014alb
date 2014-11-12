<?php
if(isset($_GET['thuongthuc']))
{
	$tmp_content = NULL;
	$url = site_url();
	switch ($_GET['thuongthuc'])
	{
	case "piano":
		$tmp_content = 	'[
							{
								title:"Cro Magnon Man",
								mp3:"http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3"
							},
							{
								title:"Your Face",
								mp3:"http://www.jplayer.org/audio/mp3/TSP-05-Your_face.mp3"
							},
							{
								title:"Cyber Sonnet",
								mp3:"http://www.jplayer.org/audio/mp3/TSP-07-Cybersonnet.mp3"
							},
							{
								title:"Tempered Song",
								mp3:"http://www.jplayer.org/audio/mp3/Miaow-01-Tempered-song.mp3"
							},
							{
								title:"Hidden",
								mp3:"http://www.jplayer.org/audio/mp3/Miaow-02-Hidden.mp3"
							},
							{
								title:"Lentement",
								free:true,
								mp3:"http://www.jplayer.org/audio/mp3/Miaow-03-Lentement.mp3"
							},
							{
								title:"Lismore",
								mp3:"http://www.jplayer.org/audio/mp3/Miaow-04-Lismore.mp3"
							},
							{
								title:"The Separation",
								mp3:"http://www.jplayer.org/audio/mp3/Miaow-05-The-separation.mp3"
							},
							{
								title:"Beside Me",
								mp3:"http://www.jplayer.org/audio/mp3/Miaow-06-Beside-me.mp3"
							},
							{
								title:"Bubble",
								free:true,
								mp3:"http://www.jplayer.org/audio/mp3/Miaow-07-Bubble.mp3"
							},
							{
								title:"Stirring of a Fool",
								mp3:"http://www.jplayer.org/audio/mp3/Miaow-08-Stirring-of-a-fool.mp3"
							},
							{
								title:"Partir",
								free: true,
								mp3:"http://www.jplayer.org/audio/mp3/Miaow-09-Partir.mp3"
							},
							{
								title:"Thin Ice",
								mp3:"http://www.jplayer.org/audio/mp3/Miaow-10-Thin-ice.mp3"
							}
						]';
		break;		
	case "guitar":
		break;
	}
	if ($tmp_content)
	{
		$content_user_wanna_listen = '<script type="text/javascript">
									$(document).ready(function(){
										playlist = new jPlayerPlaylist({
											jPlayer: "#jquery_jplayer_1",
											cssSelectorAncestor: "#jp_container_1"
										},'.$tmp_content. ', {
											swfPath: "http://localhost:88/wordpress/wp-content/themes/portal/music_js",
											supplied: "oga, mp3",
											wmode: "window",
											smoothPlayBar: true,
											keyEnabled: true
										});
									setTimeout(function() {
									                //playlist.play();
									            }, 500);
									});
									</script>';
	}	
}
?>