<div id="body" class="container">
<div class="row">    
<div id="demo" class="col-md-7 col-md-offset-3">
	<center><strong><p>Khu vuờn ALBUM của những kỉ niệm, cảm xúc</p></strong></center>
    <div class="list-group">
    <a class="list-group-item active">
    Demo một số album tự tạo của tớ ^_^
    </a>
    <a href="http://album.ocdao.net/mem/demo/16-Tuoi-hoc-tro" target="_blank" class="list-group-item">album - Tuổi học trò</a>
<a href="http://album.ocdao.net/mem/demo/36-manh-me-len-ban-cua-toi" target="_blank" class="list-group-item">album - Mạnh mẽ lên bạn của tôi</a>
<a href="http://album.ocdao.net/mem/demo/211-khi-ban-THAT-BAI-hay-xem-album-nay" target="_blank" class="list-group-item">album - khi bạn THẤT BẠI hãy xem album này</a>
    </div>
</div>
</div>

<form id="form-register" action="<?php echo URL ?>guest/requestregister" class="form-horizontal" method="post">
  <fieldset>
     
    <legend>Đăng kí tài khoản mới</legend>
    <p>(hơn 1 triệu thành viên đã đăng kí sử dụng)</p>
    <p class="text-success">Miễn phí và nhanh chóng, hãy đăng kí ngay một tài khoản để tạo những album hình đặc sắc cho bản thân hoặc tặng cho người mà bạn yêu quý</p>
    
    <div class="form-group">
      <label for="usernamereg" class="col-lg-2 control-label">Tên đăng nhập</label>
      <div class="col-lg-5">
        <div class="input-group">
            <span class="input-group-addon"><strong>></strong></span>
            <input type="text" class="form-control" id="usernamereg" name="username">
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="emailreg" class="col-lg-2 control-label">Email đăng nhập</label>
      <div class="col-lg-5">
        <div class="input-group">
            <span class="input-group-addon">@</span>
            <input type="text" class="form-control" id="emailreg" name="email" />
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="passwordreg" class="col-lg-2 control-label">Mật khẩu</label>
      <div class="col-lg-5">
        <div class="input-group">
            <span class="input-group-addon"><strong>*</strong></span>
            <input type="password" class="form-control" id="passwordreg" name="password" />
        </div>
		<br />
		<p>Lời khuyên: Hãy nhớ EMAIL và MẬT KHẨU để đăng nhập bạn nhé!</p>
        <p id="input-incorrect" class="text-danger">(*)</p>
        <p id="input-duplicate" class="text-danger">(*) Tên đăng nhập hoặc email đã được sử dụng. Vui lòng đăng kí lại</p>
        
        <input type="submit" class="btn btn-primary" value="Đăng kí" />
        <img class ="loadingimg" src="<?php echo URL; ?>/public/img/guest/loading.gif" alt="Chờ..." title = "Đang thực hiện đăng nhập"/>
      </div>
    </div>
    
    
  </fieldset>
</form>


<div class="row">
<br /><br />
<center>
<h3 class="title_hd_album" > Clip giới thiệu</h3>
 
    <div class="flex-video widescreen" style="margin: 0 auto;text-align:center;">
    <iframe width="760" height="515" src="//www.youtube.com/embed/lg0nDQnfssk" frameborder="0" allowfullscreen></iframe>
    </div> 
</center>
</div>
</div>
