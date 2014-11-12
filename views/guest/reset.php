<?php
//http://localhost:88/Nghenhac/guest/reset?token=RJDTN1TXYZMHYIH
?>

<div id="body" class="container">
    <?php
        if ($this->is_valid)
        {
    ?>
    <div class="col-md-8 col-md-offset-2">
        <form id="form-reset" action="" class="form-horizontal" method="post">
          <fieldset>
            <legend>NHẬP LẠI MẬT KHẨU MỚI!</legend>
            <div class="form-group">
              <label for="reset-password" class="col-lg-3 control-label">Mật khẩu mới</label>
              <div class="col-lg-9">
                <div class="input-group">
                    <span class="input-group-addon">*</span>
                    <input type="password" class="form-control" id="reset-password" name="password" />
                </div>
              </div>
            </div>
            
            <div class="col-md-offset-2">
            <input type="submit" class="btn btn-primary" value="Gửi yêu cầu" />
            <img class ="loadingimg" src="<?php echo URL; ?>/public/img/guest/loading.gif" alt="Chờ..." title = "Đang thực hiện đăng nhập"/>
            </div>
            
            <p id="input-pass-incorrect" class="text-danger" style="display:none;">(*) Độ dài mật khẩu từ 6 đến 15 kí tự</p>
          </fieldset>
        </form>
    </div>
    <?php
        }
    else
    {
    ?>
    <div id="password_used">
        <br /><br /><br /><br />
        <center>
            <p class="text-danger info">LINK KHÔI PHỤC MẬT KHẨU KHÔNG HỢP LỆ HOẶC MẬT KHẨU ĐÃ ĐƯỢC CẬP NHẬT</p>
        </center>
    </div>
    <?php } ?>
    
</div>

<script src="<?php echo URL; ?>public/js/resetpass.js"></script>