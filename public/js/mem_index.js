
$(document).ready(function (){
   var album;
   $(".btn-delete-album").click(function (){
       album = $(this).parent().parent().parent();
       var album_name = album.find('.name-album').html();
       var mymodal = $("#myModal");
       mymodal.find('.modal-body').html('Bạn có chắc chắn muốn xóa album: <span class="text-danger">' + album_name + '</span>');
       mymodal.find('#btn-confirm-delete').attr('data',$(this).attr('data'));
       mymodal.modal('show');
   });
   
   $("#btn-confirm-delete").click(function (){
       var url = window.location.href;
       var id_album = $(this).attr('data');
       var jqxhr = $.post( url,{ submit_delete_album: "true", id_album: id_album },function(){
           $("#myModal").modal('hide');
       })
        .done(function() {
           album.remove();        
        })
        .fail(function() {
          alert( "Lỗi xảy trong quá trình xóa album. Vui lòng thao tác lại" );
        });
       
       return false;
   });
   
   $(".btn-submit-fbpage").click(function (){
       album = $(this).parent().parent().parent();
       var album_name = album.find('.name-album').html();
       var mymodal = $("#modal-submitFBpage");
       mymodal.find('#submitFBModalLabel').html('Gửi lên Fanpage Album: <span class="text-danger">' + album_name + '</span>');
       mymodal.find('#btn-confirm-submitfb').attr('data',$(this).attr('data'));
       mymodal.modal('show');
   });
   
   $("#btn-confirm-submitfb").click(function (){
       var url = window.location.href;
       var id_album = $(this).attr('data');
       var jqxhr = $.post( url,{ submit_public_fbpage: "true", id_album: id_album },function(){
           $("#modal-submitFBpage").modal('hide');
       })
       .done(function() {
           $("#modal-confirm-submit-FBpage").modal('show');
           album.find('.btn-submit-fbpage').addClass("hidden");
           album.find('.btn-confirm-submit-fbpage').removeClass("hidden");
        })
        .fail(function() {
          alert( "Lỗi xảy trong quá trình xóa album. Vui lòng thao tác lại" );
        });
       
       return false;
   });
});
