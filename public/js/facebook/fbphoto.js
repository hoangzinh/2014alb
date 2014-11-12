function Login()
{
	FB.login(function(response) {
	   if (response.authResponse) 
	   {
			startFBPhoto();
	   } else 
	   {
			console.log('User cancelled login or did not fully authorize.');
			return false;
	   }
	 },{scope: 'email,user_photos'});
}
 
function startFBPhoto() {
	// $("#fbphoto").show();
	getPhotos();
	getAlbum();
}
	//FACEBOOK FUNCTION: show all photos this person is tagged in
function getPhotos()
{
	FB.api('/me/photos', function(response) {
	  var str = '<ul class="fb_photo">';
	  $.each(response.data,function (){
		str += formatPhotoElement(this.picture,this.source);
	  });
	  str += '</ul>';
	  document.getElementById("myfb_photo").innerHTML=str;
	});
}

	//FACEBOOK FUNCTION: shows all photos that were published to Facebook by this person
function getAlbum()
{
	FB.api('/me/albums', function(response) {
	  var str = '';
	  $.each(response.data,function (){
		str += formatAlbumElement(this.name,this.id);
	  });
		$("#myfb_album div.tabs-left ul.nav").html(str);
	});
}

	//FACEBOOK FUNCTION: shows all photos in an album that were published to Facebook by this person
function getPhotoInAlbum(id_album)
{
	FB.api('/' + id_album + '/photos', function(response) {
		var str = '<ul class="fb_photo">';
		$.each(response.data,function (){
			str += formatPhotoElement(this.picture,this.source);
		});
		str += '</ul>';
		var prepare = '<div class="album-elem tab-pane fade active in" id="' + id_album  + '">' + str + '</div>';
		$("#myfb_album div.tab-content").append(prepare);
	});
}

//format function
function formatPhotoElement(pic,src){
	var photo = '<li>' + 
				'<div class="fbthumbnail"><img draggable="false" src="' + pic + '" alt="' + src + '" /></div>' + 
				'<div class="fbcheck"></div>' + 
				'</li>';
	return photo;
}

function formatAlbumElement(name,id){
	var album = '<li class="e_album">' + 
				'<a href="#' + id + '" data-toggle="tab">' + name + '</a>' + 
			'</li>';
	return album;
}

$(document).ready(function(){
	$("a.start-get-photo-fb").click(function (){
		var album = $("div#myfb_album ul li");
		if (album.length == 0)
			Login();
	});
	$( "ul.fb_photo li").live( "click", function() {
		$(this).toggleClass("selected");
	});
	
	$( "li.e_album").live( "click", function() {
		var id = $(this).find('a').attr('href');
		id = id.substring(1);
		if($('#' + id).length == 0)  // check if album still not load
		{
			$("div.album-elem").each(function (){
				$(this).removeClass("active");
				$(this).removeClass("in");
			});
			getPhotoInAlbum(id);
		}
	return true;
	});

	//function controll
	$("#mybtn-fb-deselect-all").click(function (){
		$("#fbphoto li.selected").removeClass("selected");
	});

	$("#mybtn-fb-ok").click(function (){
		var selected = $("#fbphoto li.selected");
		var n = $(".row-photos").length + 1;
		selected.each(function (){
			var link = $(this).find(".fbthumbnail img").attr("alt");
			addPhoto_Create(link,"");
		});
		//reset select photo
		$('#photo-advance-function a[href="#collapseOne"]').click();
		selected.removeClass("selected");

		$('html,body').animate({
			scrollTop: $("#table-photo tr.row-photos td:contains('" + n + "')").offset().top},
		'slow');
	});
	
	//default setting
	$('#photo-advance-function a[href="#collapseOne"]').collapse();
});
