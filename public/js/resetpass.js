
$(document).ready(function (){  
    $("#form-reset").submit(function() {
        $("#input-pass-incorrect").hide();
        var password = $("#reset-password").val();
        
        if(password.length < 6 || password.length > 15) {
           $("#input-pass-incorrect").slideDown('slow');
           $("#reset-password").focus();
           return false;
        }
    });
});
