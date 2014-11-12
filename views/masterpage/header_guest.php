<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ốc đảo Album - Tạo album theo cách của bạn</title>   
<link rel="shortcut icon" href="<?php echo URL; ?>public/images/album.ico" />
<meta name="keywords" content="am nhac,album, oc dao" />
<meta name="description" content="Tao Album tu hinh va nhac theo cach cua ban" />
<meta property="og:image" content="https://farm8.staticflickr.com/7554/15689718886_371b9edcb0_b.jpg" />
<meta property="og:description" content="Tạo những album thật dễ thương từ hình và nhạc nền để tặng cho người mà bạn yêu quý" />
<meta property="fb:app_id" content="1468280420105623">

<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;subset=latin,vietnamese" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Sofia:400,600,700&amp;subset=latin,vietnamese" rel="stylesheet" type="text/css" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />

<!-- Optional theme -->
<link rel="stylesheet" href="<?php echo URL; ?>public/css/cosmo-bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo URL; ?>public/css/style.css" />
<link rel="stylesheet" href="<?php echo URL; ?>public/css/guest.css" />


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/js/guest.js"></script>
<script src="<?php echo URL; ?>public/js/facebook.js"></script>
</head>

<body>
<div id="fb-root"></div>
<div id="header">   
	<div class="navbar navbar-default">
    	<div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo URL.'guest/login'; ?>" ><img src="<?php echo URL; ?>public/img/logo.png" alt="logo" />Ốc đảo Album</a>
            </div>
            <div class="navbar-collapse navbar-responsive-collapse collapse in" style="height: auto;">   
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form id="form-login" action="<?php echo URL ?>guest/requestlogin" class="form-horizontal" method="post">
                            <table id="table-login" class="table">                            
                              <tr id="table_photo_header">
                                <th>Email đăng nhập</th>
                                <th>Mật khẩu</th>
                                <td></td>
                              </tr>
                              <tr>
                                <td><input type="text" class="form-control input-sm" id="email" name="email" /></td>
                                <td><input type="password" class="form-control input-sm" id="password" name="password" /></td>
                                <td><input id="btn-submit-login" type="submit" class="btn btn-primary btn-sm pull-right" value='Đăng nhập' /></td>
                              </tr>
                              <tr>
                                <td></td>
                                <td><a href="<?php echo URL ?>guest/forgotpass" id="btn-forgotpass" alt="quen mat khau">Quên mật khẩu</a></td>
                                <td></td>
                              </tr>
                            </table>
                            <p id="input-login-incorrect" class="text-danger">(*) Email đăng nhập hoặc mật khẩu không chính xác</p>
                        </form>
                           
                    </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="http://ocdao.net/" target="_blank">Đi tới ocdao.net</a></li>
                      <li><a href="http://album.ocdao.net/" target="_blank">Đi tới album.ocdao.net</a></li>
                    </ul>
                  </li>
                </ul>
            </div>
		</div>
	</div>
    
    <div id="cloud" style="background-position: -714.9000000000503px 0px;">
        <div class="hero-unit" style="background-position: 756px 0px;">
          <div class="hero-unit-inner text-center">        
            <div id="xe-dap" style="background-position: -2210px 0px;"></div>   
          </div>
        </div>
    </div>
</div>
