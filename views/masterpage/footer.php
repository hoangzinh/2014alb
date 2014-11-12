<div id="footer" class="navbar navbar-default" >
<div class="container">
<p>Copyright @ All right by Ocdao.net. Trang web đang trong giai đoạn chạy thử nghiệm, chờ cấp giấy phép hoạt động của BTTTT</p>
</div>
</div>




<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo URL; ?>public/js/sprite/jquery.spritely.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/js/sprite/jquery.transit.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
    $('#cloud').pan({fps: 30, speed: 0.7, dir: 'left'});
    $('.pagination').addClass("pagination-centered")
     $('.hero-unit').pan({fps: 30, speed: 2, dir: 'right', depth: 10});
      $('#xe-dap')
          .sprite({fps:4, no_of_frames: 18})
          .isDraggable()
          .activeOnClick()
          .active();
    });
</script>

</body>
</html>
