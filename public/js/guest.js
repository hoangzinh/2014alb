
$(document).ready(function (){  
    
   $("#form-register").submit(function() {
        $("#input-incorrect").hide();
        $("#input-incorrect").html('');
        $("#input-duplicate").hide();
        var email = $("#emailreg").val();
        var password = $("#passwordreg").val();
        var name = $("#usernamereg").val();
        
        var email_regex = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var space_regex = /^[\w]{1,15}$/;
        
        if(!space_regex.test(name) || name == "") {
           $("#input-incorrect").html('(*)Tên đăng nhập chỉ được phép bao gồm chữ cái, số và dấu gạch nối "_". Độ dài tối đa 15 kí tự');
           $("#input-incorrect").slideDown('slow');
           $("#usernamereg").focus();
           return false;
        }
        
        if(!email_regex.test(email) || email == "") {
           $("#input-incorrect").slideDown('slow');
           $("#input-incorrect").html('(*)Email không hợp lệ. Vui lòng nhập lại');
           $("#emailreg").focus();
           return false;
        } 
        
        if(password.length < 6 || password.length > 15) {           
           $("#input-incorrect").html('(*)Độ dài mật khẩu dài từ 6->15 kí tự');
           $("#input-incorrect").slideDown('slow');
           $("#passwordreg").focus();
           return false;
        }
        
        var url = $(this).attr('action');
        
        $("#form-register img.loadingimg").show('slow');
        
        $.post(url,{email:email,password:password,username:name},function(o){ 
            $("#form-register img.loadingimg").hide();
            if(o.error)
            {                
                $("#input-duplicate").html("(*)Đăng kí thất bại: " + o.content); 
                $("#input-duplicate").show('slow');
            }
            else
            {
                window.location = o.content;
            }
            
        },'json');
        
        return false; 
    });
    
    $("#form-login").submit(function() {
        $("#input-login-incorrect").hide();
        var password = $("#password").val();
        var email = $("#email").val();
        
        var email_regex = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        
        if(!email_regex.test(email) || email == "") {
           $("#input-login-incorrect").slideDown('slow');
           $("#input-login-incorrect").html('(*)Email không hợp lệ. Vui lòng nhập lại');
           $("#email").focus();
           return false;
        } 
        
        if(password.length < 6 || password.length > 15) {
           $("#input-login-incorrect").html('(*)Mật khẩu không chính xác');
           $("#input-login-incorrect").slideDown('slow');
           $("#password").focus();
           return false;
        }
        
        var url = $(this).attr('action');
        
        
        $("#btn-submit-login").addClass('disabled');
        
        $.post(url,{password:password,email:email},function(o){ 
            $("#btn-submit-login").removeClass('disabled');
            if(o.error)
            {
               $("#input-login-incorrect").html('(*)Email hoặc mật khẩu không chính xác. Vui lòng kiểm tra lại');
               $("#input-login-incorrect").slideDown('slow');
            }
            else
            {
                window.location = o.content;
            }
        },'json');
        
        return false; 
    });

	//default config
	$("#email").focus();
});
