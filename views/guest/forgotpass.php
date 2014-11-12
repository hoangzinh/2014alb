<link rel="stylesheet" href="<?php echo URL; ?>public/css/forgotpass.css" />

<div id="body" class="container">
    <div class="col-md-8 col-md-offset-2">
        <form id="form-forgotpass" action="<?php echo URL ?>guest/requestresetpass" class="form-horizontal" method="post">
          <fieldset>
            <legend>BẠN QUÊN MẬT KHẨU!</legend>
            <p class="text-success">Đừng lo lắng...Hãy điền ngay email bạn dùng để đăng kí, chúng tôi sẽ gửi email hướng dẫn bạn cách khôi phục lại mật khẩu</p>

            <div class="form-group">
              <label for="emailreg" class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">
                <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <input type="text" class="form-control" id="emailreg" name="email" />
                </div>
              </div>
            </div>
            
            <div class="col-md-offset-2">
            <input type="submit" class="btn btn-primary" value="Gửi yêu cầu" />
            <a href="<?php echo URL; ?>guest/login" class="btn btn-default" >Hủy</a>
            <img class ="loadingimg" src="<?php echo URL; ?>/public/img/guest/loading.gif" alt="Chờ..." title = "Đang thực hiện đăng nhập"/>
            </div>
            
            <p id="input-incorrect" class="text-danger">(*)</p>
          </fieldset>
        </form>
    </div>
    
    <br />
    <div id="request-reset-pass-success">
        <center>
            <h3>YÊU CẦU CỦA BẠN ĐÃ ĐƯỢC THỰC HIỆN</h3>
            <p class="text-danger info"></p>
        </center>
    </div>
    
    
<center>
	<div class="fb-comments box-fb-comments" data-href="http://album.ocdao.net/guest/forgotpass/index.php" data-numposts="7" data-colorscheme="light"></div>
</center>
</div>

<script src="<?php echo URL; ?>public/js/forgotpass.js"></script>
