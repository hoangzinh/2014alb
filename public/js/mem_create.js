$(document).ready(function (){
    var $tabs = $('#create-Tab li');

    function showPrev() {
        $tabs.filter('.active').prev('li').removeClass("disabled");
        $tabs.filter('.active').prev('li').find('a[data-toggle]').each(function () {
           $(this).attr("data-toggle", "tab");
        });

        $tabs.filter('.active').prev('li').find('a[data-toggle="tab"]').tab('show');

        $tabs.filter('.active').next('li').find('a[data-toggle="tab"]').each(function () {
            $(this).attr("data-toggle", "").parent('li').addClass("disabled");        
        });
    }

    function showNext() {
        $tabs.filter('.active').next('li').removeClass("disabled");
        $tabs.filter('.active').next('li').find('a[data-toggle]').each(function () {
            $(this).attr("data-toggle", "tab");
        });

        $tabs.filter('.active').next('li').find('a[data-toggle="tab"]').tab('show');

        $tabs.filter('.active').prev('li').find('a[data-toggle="tab"]').each(function () {
            $(this).attr("data-toggle", "").parent('li').addClass("disabled");;        
        });
    }
    
    function rmRowPhoto() {
        
    }
    
    $(".mybtn-prev").click(function (){
        showPrev();
    });
    
    
    $("#btn-next-info").click(function (){
        var name = $("#name_album").val();
        var space_regex = /^[\w][\w\s]{1,255}$/;
        if(!space_regex.test(name)) {
           $("#input-info-error").html('(*)Tên album chỉ bao gồm chữ cái (không dấu) hoặc chữ số. Độ dài tối đa không vượt quá 255 kí tự');
           $("#input-info-error").slideDown('slow');
           $("#name_album").focus();
           return false;
        }
        $("#input-info-error").slideUp('slow');
        showNext();
    });
    
    $("#btn-next-photo").click(function (){
       
       showNext();
    });
    
    $("#btn-next-story").click(function (){
        showNext();
    });
    
    
    $("#table-photo").on('click',".submit-remove-link",function(){
            var parent = $(this).parent().parent();      
            parent.remove(); 
            return false;
    });
    
    
    $("#submit-add").click(function (){
		addPhoto_Create("","");
      return false;
   });
   
   $("#form-create-ablum").submit(function() {
        var space_regex = /^\s*$/;
        var stt = 1;
        $(".row-photos").each(function(){
           var link = $(this).find('.row-link-photos').val();
           if(space_regex.test(link)) {
               return true;
           }
           $(this).find('.row-link-photos').attr('name','link'+ stt);
           $(this).find('.row-cmt-photos').attr('name','cmt' + stt);
           stt = stt + 1;
        }); 
   });
});

