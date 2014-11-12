<link rel="stylesheet" href="<?php echo URL; ?>public/css/mem/edit_style.css" />
<link rel="stylesheet" href="<?php echo URL; ?>public/css/mem/dragtable.css" />
<script src="<?php echo URL; ?>public/thirdparty/ckeditor/ckeditor.js"></script>


<div id="body" class="container">
<h1 class="title_edit_album" ><span class="glyphicon glyphicon-pencil"></span> Chỉnh sửa album</h1>

<div class="tabbable tabs-left">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#tab_a" data-toggle="tab">Thông tin Album</a></li>
      <li><a href="#tab_b" data-toggle="tab">Thêm/Xóa album ảnh</a></li>
      <li><a href="#tab_c" data-toggle="tab">Lời album muốn nói</a></li>
    </ul>
    <div class="tab-content">
     <div class="tab-pane active" id="tab_a">
        <form id="form-update-info" class="form-horizontal" action="" method="post">
          <fieldset>
            <legend>Thông tin Album</legend>
            <div class="form-group">
              <label for="name_album" class="col-lg-3 control-label">Tên album</label>
              <div class="col-lg-9">
                  <div class="input-group">
                  	<span class="input-group-addon">
                    	<span class="glyphicon glyphicon-chevron-down"></span>
                    </span>
                    <input type="text" class="form-control" id="name_album" name="name_album" placeholder="Tên album" value="<?php echo $this->name_album ?>">
                 </div>
                 <p id="input-info-error" class="text-danger">(*) Tên album chỉ bao gồm chữ cái (không dấu) hoặc chữ số. Độ dài tối đa không vượt quá 255 kí tự</p>
              </div>
            </div>
            <div class="form-group">
              <label for="link_music" class="col-lg-3 control-label">Link album nhạc</label>
              <div class="col-lg-9">
                  <div class="input-group">
                  	<span class="input-group-addon">
                    	<span class="glyphicon glyphicon-headphones"></span>
                    </span>
                    <input type="text" class="form-control" id="link_music" name="link_music" placeholder="http://..." value="<?php echo $this->music_album ?>">   
                 </div>
              </div>
            </div>
            
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" name="submit_info_album" class="btn btn-primary pull-right">Lưu chỉnh sửa thông tin chung</button>
              </div>
            </div>
          </fieldset>
        </form>
     </div> <!-- end taba -->
     <div class="tab-pane" id="tab_b">
        <form id="form-photo-album" class="form-horizontal" action="" method="post">
          <fieldset>
            <legend>Thêm/Xóa album ảnh</legend>
            <table id="table-photo" class="table table-bordered table-hover ">
              <thead>
                <tr id="table_photo_header">
                  <th class="hidden">#</th>
                  <th>STT</th>
                  <th>Link ảnh</th>
                  <th>Tiêu đề ảnh</th>
                  <th>Xóa ảnh</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                    $stt = 1;
                    foreach ($this->photo_album as $photo)
					{
						$cmt = Mem_Model::normalizeStringLoad($photo[2]);
                  ?>
                        <tr class="row-photos">
                        <td class="hidden"><input class="row-id-photos" type="text" name="stt<?php echo $stt; ?>" value="<?php echo $photo[0]; ?>" /></td>
                        <td><?php echo $stt; ?></td>
                        <td><input type="text" class="form-control row-link-photos" name="link<?php echo $stt; ?>" value="<?php echo $photo[1]; ?>" placeholder="http://..." /></td>
                        <td><input type="text" class="form-control row-cmt-photos" name="cmt<?php echo $stt; ?>" value="<?php echo $cmt; ?>" /></td>
                        <td><button name="submit_edit_photos" class="btn btn-primary btn-disabled pull-right submit-remove-link">Xóa</button></td>
                        </tr>
                  <?php
                        $stt = $stt + 1;
                    }
                  ?>
                
              </tbody>
                </table> 
                
                
            
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
              	<button type="submit" name="submit_edit_photos" class="btn btn-primary pull-right">Lưu chỉnh sửa ảnh</button>
              	<button id="submit-add" class="btn btn-warning pull-right">Thêm ảnh</button>                
              </div>
            </div>
          </fieldset>
        </form>
     </div> <!-- end tab b -->
     <div class="tab-pane" id="tab_c">
        <form class="form-horizontal" action="" method="post">
        <fieldset>
            <legend>Lời album muốn nói</legend>
            
            <div class="form-group">
              <label for="title_story" class="col-lg-3 control-label">Tựa câu chuyện</label>
              <div class="col-lg-9">
                <input type="text" class="form-control" name="title_story" id="title_story" placeholder="Tựa đề" value="<?php echo $this->title_story ?>">
              </div>
            </div>
            
            <label class="control-label" >Nội dung câu chuyện</label>  
            <p>
                <textarea cols="80" id="content_story" name="content_story" rows="20"><?php echo $this->content_story ?></textarea>
                <script>
                    CKEDITOR.replace( 'content_story', {
                       // uiColor: '#14B8C4',
                        toolbar: [
                            [ 'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
                            [ 'FontSize', 'TextColor', 'BGColor' ]
                        ]
                    });
            
                </script>
            </p>
            <p>
                <input type="submit" name="submit_story_album" class="btn btn-primary pull-right" value="Lưu lời album muốn nói">
            </p>
            </fieldset>
        </form>
     </div> <!-- end tab c -->
    </div>
</div> <!-- /tabs -->
    
<br />
<a href="<?php echo URL.'mem/'.$this->username; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Quay lại trang chủ</a>      

<hr />
<h3 class="title_hd_album" > Bạn gặp khó khăn trong quá trình chỉnh sửa ablum. Hãy xem clip hướng dẫn dưới đây và làm theo nhé</h3>
<div class="row">
 <center>
    <div class="flex-video widescreen" style="margin: 0 auto;text-align:center;">
    <iframe width="760" height="515" src="//www.youtube.com/embed/v4Yzpv4MEvQ" frameborder="0" allowfullscreen></iframe>
    </div> 
</center>
</div>

<br /><br /><br />
<div class="col-md-5">
<p>Một số thắc mắc thường gặp</p>
<p>Một số thắc mắc thường gặp</p>
<div class="panel-group" id="accordion">
	<div class="panel panel-default">
		<div class="panel-heading">
			<a class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapseA">- Lấy link ảnh:</a>
		</div>
		<div id="collapseA" class="panel-collapse collapse">
			<div class="panel-body">
				<p>Các bạn xem hướng dẫn từ đoạn này để biết cách lấy link ảnh nhé</p>
				<a href="http://youtu.be/7mIQdcwo7i0?t=4m46s" target="_blank">http://youtu.be/7mIQdcwo7i0?t=4m46s</a>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<a class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapseB">- Đăng lên FB:</a>
		</div>
		<div id="collapseB" class="panel-collapse collapse">
			<div class="panel-body">
				<p>Các bạn xem hướng dẫn từ đoạn này để biết cách đăng lên Facebook nhé</p>
				<a href="http://youtu.be/7mIQdcwo7i0?t=12m6s" target="_blank">http://youtu.be/7mIQdcwo7i0?t=12m6s</a>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<a class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapseC">- Lấy link nhạc: </a>
		</div>
		<div id="collapseC" class="panel-collapse collapse">
			<div class="panel-body">
				<p>Các bạn xem hướng dẫn từ đoạn này để biết cách lấy link nhạc nhé</p>
				<a href="http://youtu.be/7mIQdcwo7i0?t=3m38s" target="_blank">http://youtu.be/7mIQdcwo7i0?t=3m38s</a>
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-md-7">
<div class="fb-comments" data-href="http://album.ocdao.net/mem/update.html" data-numposts="7" data-colorscheme="light"></div>
</div>
</div><!-- tab body -->

<script src="<?php echo URL; ?>public/js/mem_update.js"></script>
<script src="<?php echo URL; ?>public/js/tablednd/jquery.tablednd.js"></script>
<script src="<?php echo URL; ?>public/js/tablednd/customdnd_update.js" type="text/javascript"></script>
