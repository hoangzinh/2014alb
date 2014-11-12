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
	
	//scroll bar
	// $("#info_music").mCustomScrollbar();
	//$("#info_cmt").mCustomScrollbar();
	
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
	
	
	
        $('ul.etabs').each(function(){
            // For each set of tabs, we want to keep track of
            // which tab is active and it's associated content
            var $active, $content, $links = $(this).find('a');

            // If the location.hash matches one of the links, use that as the active tab.
            // If no match is found, use the first link as the initial active tab.
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
						$("#tab1 embed").attr("width",1);
						$("#tab1 embed").attr("height",1);
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
                $("#tab1 embed").attr("width",300);
                $("#tab1 embed").attr("height",286);
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

        var src = $("#tab1 embed").attr('src');
        var zing = "mp3.zing.vn";
        if (src.indexOf(zing) != -1)
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
           if(interval == 3){
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
