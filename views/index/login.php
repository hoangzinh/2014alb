<link href="<?php echo URL; ?>/public/css/index/login.css" rel="stylesheet" type="text/css" />



<script src="<?php echo URL; ?>/public/js/index/js_login.js" type="text/javascript"></script>
<script src="<?php echo URL; ?>/public/js/js_texteffect.js" type="text/javascript"></script>

<div id = "signInArea">
    <div id = "signInContainer">
        <h2 class = "titlePage">Đăng nhập RoomChat</h2>
        
        <div class = "formSignUp">
            <form id="loginform" action="<?php echo URL; ?>/index/checkLogIn" method="post">
                <input id ="emaillogin" type="text" name="email" class = "textlogin" title = "Email đăng nhập" /><br />
                <input id ="passlogin" type="text" name="password" class = "textlogin password" title = "Mật khẩu của bạn"  /> <br />
                <input type="submit" class = "btlogin" value = "Đăng nhập"/>
                <div><img class ="loadingimg" src="<?php echo URL; ?>/public/img/global/loading.gif" alt="Chờ..." title = "Đang thực hiện đăng nhập"/></div>
                <p class = "backSignUp">hoặc quay lại <a href ="<?php echo URL; ?>/index">Đăng kí </a>một tài khoản nhanh chóng và miễn phí</p>    
            </form>
        </div>
        <div id ="titleValidation">Đăng nhập không thành công</div>
        <ul id="error"></ul>
    </div>
</div>
