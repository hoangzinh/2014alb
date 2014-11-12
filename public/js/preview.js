$(document).ready(function (){
   $("#mybtn_preview").click(function() {
        var space_regex = /^\s*$/;
        var photo = "";
        $(".row-photos").each(function(){
           var link = $(this).find('.row-link-photos').val();
           if(space_regex.test(link)) {
               return true;
           }
           
           photo += "{image :'" + link + "',title : '" + $(this).find('.row-cmt-photos').val() + "'}," ;
        });
        //if (photo === null)
        //    return false;
        
        var url = "http://album.ocdao.net/preview/update";
        var id = $("#mybtn_preview").attr('rel');
        var music = $("#link_music").val();
        var title = $("#title_story").val();
        var content = $("#content_story").val();
        $.post(url,{id:id,music:music,photo:photo,title:title,content:content},function(o){ 
            if(o.error)
            {                
                $("#input-duplicate").html("(*)Lỗi: "); 
                $("#input-duplicate").show('slow');
                return false;
            }            
        },'json');
   });
});

