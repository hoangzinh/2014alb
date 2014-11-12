<link rel="stylesheet" href="<?php echo URL; ?>public/css/mem/index.css" />
<div id="body" class="container">
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Cảnh báo</h4>
      </div>
      <div class="modal-body">
        Bạn có chắc chắn muốn xóa album này?
      </div>
      <div class="modal-footer">
        <button type="button" id="btn-confirm-delete" class="btn btn-primary">Đúng</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Quay lại</button>
        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-submitFBpage" tabindex="-1" role="dialog" aria-labelledby="submitFBModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="submitFBModalLabel">Cảnh báo</h4>
      </div>
      <div class="modal-body">
        <p>Bạn có mong muốn CHIA SẺ album của mình cho mọi nguời biết?</p>
        <p>Hãy click vào nút "Gửi lên" dưới đây, chúng tôi sẽ <strong>chọn lựa và đăng lên</strong> <a href="https://www.facebook.com/fanpageocdao" target="_blank" title="Đi tới Fanpage" >Facebook Fanpage</a> của Ocdao.net</p>
        <p>Biết đâu, đâu đó trong cộng đồng Ốc Đảo, sẽ có người đồng cảm với bạn ^_^</p>
      </div>
      <div class="modal-footer">
        <button type="button" id="btn-confirm-submitfb" class="btn btn-primary">Gửi lên</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Quay lại</button>
        
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-confirm-submit-FBpage" tabindex="-1" role="dialog" aria-labelledby="confirmSubmitModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="confirmSubmitModalLabel">Chúc mừng</h4>
      </div>
      <div class="modal-body">
        <p>Album của bạn đã được <strong>gửi lên Fanpage</strong></p>
        <p>Hãy like <a href="https://www.facebook.com/fanpageocdao" target="_blank" title="Đi tới Fanpage" >Ốc Đảo Fanpage</a> để theo dõi xem album của mình có được Ốc đảo lựa chọn không nhé</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng lại</button>
      </div>
    </div>
  </div>
</div>

<div id="main" class="col-md-8 col-sm-9">
<div class="main-panel">
      <h4 class="panel-title col-md-7"><span class="glyphicon glyphicon-cloud"></span> Danh sách Album của bạn</h4>      
      <a href="<?php echo URL.'mem/'.$this->username.'/create'; ?>" class="btn btn-warning"><span class="glyphicon glyphicon-plus"></span> Tạo album mới</a>  
</div>
<div class="list-group">
<?php
foreach ($this->list_album as $row) {
    //Removes whitespace or other predefined characters from the right side of a string
    $string = ltrim($row[1]);
    // Removes whitespace or other predefined characters from both sides of a string
    $string = rtrim($string);
    // str replace methods
    $string = str_replace(" ", "-", $string);
    // RemoveSpecial Character
    $string = preg_replace("/[^A-Za-z0-9\-]/", "",$string);
    // Remove Multiple -
    $string = preg_replace('/-+/', '-',$string);
?>   
   <div class="list-group-item">
   <p>album - <a href="<?php echo URL.'mem/'.$this->username.'/'.$row[0].'-'.$string; ?>" target="_blank" class="list-group-item-heading name-album"><?php echo $row[1]; ?></a></p>
   
   <div class="row"> 
       <div class="col-md-4">
           <p class="album-date-create"><?php echo date('d/m/Y', strtotime($row[3])); ?></p>
       </div>
       <div class="pull-right">
            <?php if ($row[2] == 0)
            { ?>
            <button type="button" data="<?php echo $row[0]; ?>" class="btn btn-info btn-sm btn-submit-fbpage">Gửi lên Fanpage</button>
            <button type="button" data="<?php echo $row[0]; ?>" class="btn btn-info btn-sm btn-confirm-submit-fbpage hidden" data-toggle="modal" data-target="#modal-confirm-submit-FBpage">Đã gửi lên Fanpage</button>
            <?php } else { ?>
            <button type="button" data="<?php echo $row[0]; ?>" class="btn btn-info btn-sm btn-submit-fbpage hidden">Gửi lên Fanpage</button>
            <button type="button" data="<?php echo $row[0]; ?>" class="btn btn-info btn-sm btn-confirm-submit-fbpage" data-toggle="modal" data-target="#modal-confirm-submit-FBpage">Đã gửi lên Fanpage</button>
            <?php } ?>
            <a href="<?php echo URL.'mem/'.$this->username.'/update?id_album='.$row[0]; ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit"></span> Chỉnh sửa album</a>
            <button type="button" data="<?php echo $row[0]; ?>" class="btn btn-default btn-sm btn-delete-album" ><span class="glyphicon glyphicon-remove"></span> Xóa</button>
        </div>
   </div>
   </div>
<?php
}
?>
</div>

</div>

<div id="sidebar" class="panel panel-primary col-md-4 col-sm-3">
    
      <div class="panel-heading">
        <span class="glyphicon glyphicon-pencil"></span> Giới thiệu về Album Ốc đảo
      </div>
      <div class="panel-body">
        <p>Ốc đảo Album là nơi bạn tạo ra những <span class="text-primary">album hình thật ý nghĩa kết hợp với những giai điệu âm nhạc</span> cho riêng bản thân để có những giây phút <span class="text-info">thư giãn, giảm stress</span> hoặc <span class="text-info">chia sẻ</span> đến cho những người mà mình yêu quý nhất</p>
      </div>
</div>

</div>


<script src="<?php echo URL; ?>public/js/mem_index.js"></script>
