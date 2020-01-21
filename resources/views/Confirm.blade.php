<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>E-Toko | Confirm</title>
  <link href="/Library/css/bootstrap.min.css" rel="stylesheet">
  <link href="/Library/css/font-awesome.min.css" rel="stylesheet">
  <link href="/Library/css/prettyPhoto.css" rel="stylesheet">
  <link href="/Library/css/price-range.css" rel="stylesheet">
  <link href="/Library/css/animate.css" rel="stylesheet">
  <link href="/Library/css/main.css" rel="stylesheet">
  <link href="/Library/css/responsive.css" rel="stylesheet">
  <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
<link rel="shortcut icon" href="/Library/images/favicon.ico">
</head>
<!--/head-->

<body>
  <?php
  $id = Session::get('id_user');
   ?>
  <div class="header-middle" style="margin-bottom:20px"><!--header-middle-->
    <div class="container">
      <div class="row">
        <div class="col-md-4 clearfix">
          <div class="logo">
            <a href="/"><img src="/Library/images/home/logo.png" alt="" /></a>
          </div>
        </div>
        <div class="col-md-8 clearfix">
          <div class="shop-menu clearfix pull-right">
            <ul class="nav navbar-nav">
              <li><a href="/keranjang"><i class="fa fa-shopping-cart"></i> Cart</a></li>
              <li><a href="/confirm"><i class="fa fa-check-circle"></i> Konfirmasi</a></li>
              <li><a href="/contact"><i class="fa fa-envelope"></i> Tentang Kami</a></li>
              <?php if ($id != null) {?>
                <li><a href="/Keluar"><i class="fa fa-lock"></i> Logout</a></li>
              <?php } else { ?>
                <li><a href="/login"><i class="fa fa-lock"></i> Login</a></li>
            <?php  }?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div><!--/header-middle-->

  <section id="form">
    <!--form-->
    <div class="container">
      <div class="row">
        <div class="col align-self-center">
          <div class="login-form text-center">
            <!--login form-->
            <h2>Konfirmasi</h2>
            <form action="/Konfirm" enctype="multipart/form-data" method="POST">
              <input type="text" placeholder="ID Token" name="id_token" id="id_token" />
              <input type="file" name="file" id="file" />
              <button type="submit" class="btn btn-default btn-lg btn-block">Confirm</button>
            </form>
          </div>
          <!--/login form-->
        </div>
      </div>
    </div>
  </section>
  <!--/form-->

  <hr/>

    <footer>
  			<div class="container">
  				<div class="row">
  					<p class="text-center">Copyright © 2020 EToko. All rights reserved.</p>
            <p class="text-center">Designed by <span><a target="_blank" href="https://github.com/andika-andriana">Andika Andriana</a></span></p>
  				</div>
  			</div>
  	</footer><!--/Footer-->

  <script src="/Library/js/jquery.js"></script>
  <script src="/Library/js/price-range.js"></script>
  <script src="/Library/js/jquery.scrollUp.min.js"></script>
  <script src="/Library/js/bootstrap.min.js"></script>
  <script src="/Library/js/jquery.prettyPhoto.js"></script>
  <script src="/Library/js/main.js"></script>
</body>

</html>
