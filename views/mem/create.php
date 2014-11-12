<link rel="stylesheet" href="<?php echo URL; ?>public/css/mem/create.css" />
<link rel="stylesheet" href="<?php echo URL; ?>public/css/mem/edit_style.css" />
<link rel="stylesheet" href="<?php echo URL; ?>public/css/mem/dragtable.css" />
<link rel="stylesheet" href="<?php echo URL; ?>public/css/mem/photo_fbstyle.css" />
<link rel="stylesheet" href="<?php echo URL; ?>public/css/mem/photo_advancefunc.css" />
<script src="<?php echo URL; ?>public/thirdparty/ckeditor/ckeditor.js"></script>

<div id="body" class="container">
<h1 class="title_edit_album" ><span class="glyphicon glyphicon-pencil"></span> Tạo album mới</h1>
<a target="_blank" class="btn btn-warning pull-right" id="mybtn_preview" href="<?php echo URL; ?>preview?id=<?php echo $this->id_preview; ?>" rel="<?php echo $this->id_preview; ?>" >Xem thử</a>
<p>Hoàn thành 3 bước sau </p>
<div id ="THREESTEP" >
<ul class="nav nav-pills nav-justified" id="create-Tab">
  <li class="active"><a href="#tab_a" data-toggle="tab">Thông tin Album chung</a></li> <li class="disabled" ><a href="#tab_b" data-toggle="">Thiết kế album ảnh</a></li> <li class="disabled" ><a href="#tab_c" data-toggle="">Lời album muốn nói</a></li>
</ul>
<form id="form-create-ablum" class="form-horizontal" action="" method="post">

<div class="tab-content">
        <div class="tab-pane active " id="tab_a">
            <div class="row body-tab">
                <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                  <label for="name_album" class="col-lg-3 control-label">Tên album</label>
                  <div class="col-lg-9">
                      <div class="input-group">
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </span>
                        <input type="text" class="form-control" id="name_album" name="name_album" placeholder="Tên album" />
                     </div>
                     <p id="input-info-error" class="text-danger"></p>
                  </div>
                </div>
                <div class="form-group">
                  <label for="link_music" class="col-lg-3 control-label">Link album nhạc</label>
                  <div class="col-lg-9">
                      <div class="input-group">
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-headphones"></span>
                        </span>
                        <input type="text" class="form-control" id="link_music" name="link_music" placeholder="http://..." />   
                     </div>                     
                  </div>
                  
                </div>
                </div>
            </div>
             <ul class="pager">
                <li class="next pull-right"><button id="btn-next-info" class="btn btn-info" type="button" ><span class="glyphicon glyphicon-arrow-right"></span>Buớc tiếp theo </button></li>
             </ul>
             
        </div>
        <div class="tab-pane" id="tab_b">
            <div class="row body-tab">
                <div class="col-md-10 col-md-offset-1">
                    <table id="table-photo" class="table table-bordered table-hover ">
                      <thead>
                        <tr id="table_photo_header">
                          <th>STT</th>
                          <th>Link ảnh</th>
                          <th>Tiêu đề ảnh</th>
                          <th>Xóa ảnh</th>
                        </tr>
                      </thead>
                      <tbody>
							<tr class="row-photos">
							<td>1</td>
                            <td><input type="text" class="form-control row-link-photos" placeholder="http://..." /></td>
                            <td><input type="text" class="form-control row-cmt-photos" /></td>
                            <td><a href="#" class="btn btn-primary btn-disabled pull-right submit-remove-link">Xóa</a></td>
                            </tr>
							<tr class="row-photos">
							<td>2</td>
                            <td><input type="text" class="form-control row-link-photos" placeholder="http://..." /></td>
                            <td><input type="text" class="form-control row-cmt-photos" /></td>
                            <td><a href="#" class="btn btn-primary btn-disabled pull-right submit-remove-link">Xóa</a></td>
							</tr>                          
							<tr class="row-photos">
							<td>3</td>
                            <td><input type="text" class="form-control row-link-photos" placeholder="http://..." /></td>
                            <td><input type="text" class="form-control row-cmt-photos" /></td>
                            <td><a href="#" class="btn btn-primary btn-disabled pull-right submit-remove-link">Xóa</a></td>
							</tr>
							<tr class="row-photos">
							<td>4</td>
                            <td><input type="text" class="form-control row-link-photos" placeholder="http://..." /></td>
                            <td><input type="text" class="form-control row-cmt-photos" /></td>
                            <td><a href="#" class="btn btn-primary btn-disabled pull-right submit-remove-link">Xóa</a></td>
                            </tr>
                      </tbody>
                      </table> 

                    <div class="form-group">
                      <div class="col-lg-10 col-lg-offset-2">
                        <button id="submit-add" class="btn btn-warning pull-right">Thêm ảnh</button>                
                      </div>
                    </div>

					<!-- advance function -->
					<div class="panel-group" id="photo-advance-function">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#photo-advance-function" href="#collapseOne">
								 Chức năng lấy link ảnh nâng cao
								</a>
							  </h4>
							</div>
						<div id="collapseOne" class="panel-collapse collapse in">
							<div class="bs-callout bs-callout-info">
								<h4>Huớng dẫn</h4>
								<!-- <p>Nếu bạn chưa biết cách sử dụng chức năng này thì có thể xem qua TUT huớng dẫn duới đây</p> -->
								<!-- <a href="#" target="_blank" >&#45; Huớng dẫn sử dụng chức năng lấy link ảnh từ facebook (Dang cap nhat)</a> -->
								<p>Đang cập nhật...</p> 
							</div>
							<div class="panel-body hide">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
										<a class="accordion-toggle start-get-photo-fb" data-toggle="collapse" data-parent="#collapseOne" href="#collapseFB" >
											Lấy link ảnh từ facebook
										</a>
										</h4>
									</div>
									<div id="collapseFB" class="panel-collapse collapse">
										<div class="panel-body">
											<div id="fbphoto" class="col-md-12">
												<ul class="nav nav-tabs nav-justified">
													<li class="active"><a href="#myfb_photo" data-toggle="tab">Photos</a></li>
													<li ><a href="#myfb_album" data-toggle="tab">Album</a></li>
												</ul>
												<div id="myTabContent" class="tab-content">
													<div class="tab-pane fade active in" id="myfb_photo">
														<ul class="fb_photo">
														<li>
															<div class="fbthumbnail"><img draggable="false" src="<?php echo $photo["pic"];?>" alt="<?php echo $photo["src"];?>" /></div>
															<div class="fbcheck"></div>
														</li>
														</ul>
													</div>
													<div class="tab-pane fade" id="myfb_album">
														<div class="tabbable tabs-left row">
															<ul class="nav nav-tabs">
															</ul>
															<div class="tab-content" >
															</div> <!--end of sub left tab content-->
														</div> <!-- end of sub tab left -->
													</div> <!-- end of tab content -->
												</div> <!-- end of tab -->
											</div>
										</div>
										<button id="mybtn-fb-ok" class="btn btn-primary pull-right" type="button" ><span class="glyphicon glyphicon-arrow-left"></span>Chon xong </button>
										<button id="mybtn-fb-deselect-all" class="btn btn-default pull-right" type="button" ><span class="glyphicon glyphicon-arrow-left"></span>Bỏ chọn</button>
									</div>
								</div> <!-- end of first sub panel -->
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#collapseOne" href="#collapseFlickr">
											Lấy link ảnh từ Flickr
										</a>
										</h4>
									</div> 
									<div id="collapseFlickr" class="panel-collapse collapse">
										<div class="panel-body">
											Chức năng lấy link ảnh từ Flick đang trong quá trình hòan thiện. Mong các bạn thông cảm ^_^
										</div>
									</div>
								</div> <!-- end of second sub panel -->
							</div> <!--end of main panel-body -->
						</div>
					  </div>
					</div> <!-- end of main panel -->
				</div>
            </div>
            <ul class="pager">
                <li class="previous pull-left"><button class="btn btn-warning mybtn-prev" type="button" ><span class="glyphicon glyphicon-arrow-left"></span>Buớc truớc </button></li>
                <li class="next pull-right"><button id="btn-next-photo" class="btn btn-info" type="button" ><span class="glyphicon glyphicon-arrow-right"></span>Buớc tiếp theo </button></li>
            </ul>
        </div>
        <div class="tab-pane" id="tab_c">
            <div class="row body-tab">
                <div class="col-md-8 col-md-offset-2"> 
                    <div class="form-group">
                     <label for="title_story" class="col-lg-3 control-label">Tựa câu chuyện</label>
                     <div class="col-lg-9">
                       <input type="text" class="form-control" name="title_story" id="title_story" placeholder="Tựa đề" >
                     </div>
                   </div>

                   <label class="control-label" >Nội dung câu chuyện</label>  
                   <p>
                       <textarea cols="80" id="content_story" name="content_story" rows="20"></textarea>
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
                </div>
            </div>
            <ul class="pager">
                <li class="previous pull-left"><button class="btn btn-warning mybtn-prev" type="button" ><span class="glyphicon glyphicon-arrow-left"></span>Buớc truớc </button></li>
                <li class="next pull-right"><button type="submit" name="submit_create_album" class="btn btn-primary pull-right">Tạo album</button></li>
             </ul>
        </div>
</div><!-- tab content -->
</form>
</div>

<br /><br />
<a href="<?php echo URL.'mem/'.$this->username; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Quay lại trang chủ</a>      


<h3 class="title_hd_album" > Bạn gặp khó khăn trong quá trình tạo ablum. hãy xem clip hướng dẫn dưới đây và làm theo nhé</h3>
<div class="row">
 <center>
    <div class="flex-video widescreen" style="margin: 0 auto;text-align:center;">
    <iframe width="760" height="515" src="//www.youtube.com/embed/7mIQdcwo7i0" frameborder="0" allowfullscreen></iframe>
    </div> 
</center>
</div>

<br /><br /><br />
<div class="col-md-5">
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
<div class="fb-comments" data-href="http://album.ocdao.net/mem/create.html" data-numposts="7" data-colorscheme="light"></div>
</div>
</div><!-- tab body -->

<script src="<?php echo URL; ?>public/js/mem.js"></script>
<script src="<?php echo URL; ?>public/js/mem_create.js"></script>
<script src="<?php echo URL; ?>public/js/preview.js"></script>
<script src="<?php echo URL; ?>public/js/tablednd/jquery.tablednd.js"></script>
<script src="<?php echo URL; ?>public/js/facebook/fbphoto.js" type="text/javascript" ></script>
<script src="<?php echo URL; ?>public/js/tablednd/customdnd_create.js" type="text/javascript"></script>
