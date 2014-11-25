$(document).ready(function() {
	$(".music-tag").click(function () {
        if (!$(this).hasClass("selected")) {
            $(".music-tag").removeClass("selected");
            $(this).toggleClass("selected");
        }
        else {
            $(this).toggleClass("selected");
        }
		$("p.error-tag").slideUp();
    });
	
	$("#bt_fullscreen").click(function(){
		var element = document.documentElement;
		if(element.requestFullscreen) {
			element.requestFullscreen();
		} else if(element.mozRequestFullScreen) {
			element.mozRequestFullScreen();
		} else if(element.webkitRequestFullscreen) {
			element.webkitRequestFullscreen();
		} else if(element.msRequestFullscreen) {
			element.msRequestFullscreen();
		}
	});
	
	$("#bt_exitscreen").click(function(){
		var element = document.documentElement;
		
		if(document.exitFullscreen) {
			document.exitFullscreen();
		} else if(document.mozCancelFullScreen) {
			document.mozCancelFullScreen();
		} else if(document.webkitExitFullscreen) {
			document.webkitExitFullscreen();
		}
	});
	
	$("#btnPlayNow").click(function() {
        if ($(".music-tag.selected").attr("alt") == undefined)
        {		
            $("p.error-tag").slideDown();
            return;
        }
		
	document.location.href = "http://album.ocdao.net/?toimuonden="+ $("#myImageFlow_caption").attr("title")  + "&thuongthuc=" + $(".music-tag.selected").attr("alt");
    });
	

	var is_flash = $("#tab1 embed").length;
	$('ul.etabs').each(function(){
		var $active, $content, $links = $(this).find('a');

		$active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[1]);
		$active.addClass('active');

		$content = $($active[0].hash);

		// Hide the remaining content
		$links.not($active).each(function () {
		  $(this.hash).hide();
		});
		
		// Bind the click event handler
		$(this).on('click', 'a', function(e){
			// Make the old tab inactive.
			$active.removeClass('active');
			if($active.attr('href') == "#tab1")
			{
				if(is_flash){
					$("#tab1 embed").attr("width",1);
					$("#tab1 embed").attr("height",1);
				}else{
					$("#jp_container_1").hide();
				}
				$("#tab1").removeClass("tab-id");
			}
			else
				$content.hide();

			// Update the variables with the new link and content
			$active = $(this);
			$content = $(this.hash);

			// Make the tab active.
			$active.addClass('active');
			if($active.attr('href') == "#tab1")
			{
				if(is_flash){
					$("#tab1 embed").attr("width",300);
					$("#tab1 embed").attr("height",286);
				}else{
					$("#jp_container_1").show();
				}
				$("#tab1").addClass("tab-id");
			}
			else
				$content.show();

			if($active.attr('href') == '#tab-close')
			{
				$active.hide();
			}else
			{
				$('ul.etabs a[href$="#tab-close"]').show();
			}

			// Prevent the anchor's default click action
			e.preventDefault();
		});
	});

	$('ul.etabs a[href$="#tab-close"]').click();

	//check if mobile device, open music box (HTML5 is not auto play)
	var is_phone = (/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()));
	if (is_phone == false)
		$("#jp_container_1").hide();
	else
		$('ul.etabs a[href$="#tab1"]').click();

	if (is_flash == false)
	{
		//fixing not autoplay in mobile device
		var click = document.ontouchstart === undefined ? 'click' : 'touchstart';
		var kickoff = function () {
			$("#jquery_jplayer_1").jPlayer("play");
			document.documentElement.removeEventListener(click, kickoff, true);
		};
		document.documentElement.addEventListener(click, kickoff, true);

		//open show playlist
		$("a.jp-open-playlist").click(function(){
			$("div.jp-playlist").toggle();
		});
	}

	//for zing.vn embed is crash if hide before loading finish
	var src = $("#tab1 embed").attr('src');
	var zing = "mp3.zing.vn";
	if (typeof src != 'undefined' && src.indexOf(zing) != -1)
	{
		$('ul.etabs a[href$="#tab1"]').click();
		setTimeout(function () {
				$('ul.etabs a[href$="#tab-close"]').click();
		},10000);
	}

	if(window.location.href != "http://album.ocdao.net/" )
	{
		//autohide when inactive in 3s
		var interval = 1;

		setInterval(function(){
			var is_hide = ($('ul.etabs a[href$="#tab-close"]').is(":hidden"));
			if(interval == 3 && is_hide){
				/* if intervall reaches 3 the user is inactive hide element/s */
				$('#home').hide();
				$('#fb-like-panpage').hide();
				$('.tab-container ul.etabs').hide();
				interval = 1;
			}
			interval = interval+1;
		},1000);

		$(document).bind('mousemove keypress', function() {
			/* on mousemove or keypressed show the hidden input (user active) */
			$('#home').show();
			$('#fb-like-panpage').show();
			$('.tab-container ul.etabs').show();
				interval = 1;
		});
	}        
});
