
$(document).ready(function (){

   $("#table-photo").on('click',".submit-remove-link",function(){
            var parent = $(this).parent().parent();     
            if(parent.find('.row-id-photos').attr('value') != "-1")
            {
                parent.hide();
                parent.find('.row-link-photos').attr('value',"del");
            }
            else
                parent.remove(); 
            
            return false;
    });
   
   $("#submit-add").click(function (){
      n = $(".row-photos").length + 1;
      $("#table-photo").append('<tr class="row-photos"><td class="hidden"><input class="row-id-photos" type="text" name="stt" value="-1" /></td><td>'+ n + '</td><td><input type="text" class="form-control row-link-photos" placeholder="http://..." /></td><td><input type="text" class="form-control row-cmt-photos" /></td><td><button name="submit_edit_photos" class="btn btn-primary btn-disabled pull-right submit-remove-link">Xóa</button></td></tr>');
      $("#table-photo").tableDnDUpdate();
       return false;
   });
   
   
   $("#form-update-info").submit(function (){
        var name = $("#name_album").val();
        var space_regex = /^[\w][\w\s]{1,255}$/;
        if(!space_regex.test(name)) {
           $("#input-info-error").slideDown('slow');
           $("#name_album").focus();
           return false;
        }
        $("#input-info-error").slideUp('slow'); 
   });
   
   $("#form-photo-album").submit(function() {
        var space_regex = /^\s*$/;
        var stt = 1;
        $(".row-photos").each(function(){
           var link = $(this).find('.row-link-photos').val();
           if(space_regex.test(link)) {
               return true;
           }
           $(this).find('.row-id-photos').attr('name','stt'+ stt);
           $(this).find('.row-link-photos').attr('name','link'+ stt);
           $(this).find('.row-cmt-photos').attr('name','cmt' + stt);
           stt = stt + 1;
        }); 
   });
});
