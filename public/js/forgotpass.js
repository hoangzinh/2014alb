$(document).ready(function (){  
    
   $("#form-forgotpass").submit(function() {
        $("#input-incorrect").hide();
        $("#input-incorrect").html('');
        var email = $("#emailreg").val();
        
        var email_regex = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if(!email_regex.test(email) || email == "") {
           $("#input-incorrect").slideDown('fast');
           $("#input-incorrect").html('(*) Email không hợp lệ. Vui lòng nhập lại');
           $("#emailreg").focus();
           return false;
        } 
        
        var url = $(this).attr('action');
        
        $("#form-forgotpass img.loadingimg").show('slow');
        
        $.post(url,{email:email},function(o){ 
            $("#form-forgotpass img.loadingimg").hide();
            if(o.error)
            {                
                $("#input-incorrect").html("(*) Email chưa từng được sử dụng. Vui lòng nhập chính xác email bạn đã dùng để đăng kí"); 
                $("#input-incorrect").show('slow');
            }
            else
            {
                $("#form-forgotpass").slideUp('fast');
                $("#request-reset-pass-success p.info").html("Vui lòng kiểm tra <strong>HỘP THƯ ĐẾN</strong> hoặc <strong>HỘP THƯ RÁC</strong> của email <strong>" + email + "</strong> để được hướng dẫn cách khôi phục mật khẩu");
                $("#request-reset-pass-success").slideDown('slow');
            }
            
        },'json');
        
        return false; 
    });
});
