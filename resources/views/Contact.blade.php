<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>E-Toko | Contact Us</title>
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
</head><!--/head-->

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

	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">
	    		<div class="col-sm-12">
					<h2 class="title text-center">Contact <strong>Us</strong></h2>
					<div class="contact-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.8274364630106!2d106.8402150982156!3d-6.416213826286373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ebc907946fa5%3A0x284173365bb7ef70!2sSendalu%20Permaculture!5e0!3m2!1sid!2sid!4v1579521543359!5m2!1sid!2sid" width="1200" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
    		<div class="row" style="margin-top:20px">
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Get In Touch</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    				<p>Etoko.</p>
							<p>Jl. Persahabatan No.67, Sukmajaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16412</p>
							<p>Email: andriana.mia1@gmail.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social</h2>
							<ul>
								<li>
									<a href="https://github.com/andika-andriana" target="_blank"><i class="fa fa-github"></i></a>
								</li>
								<li>
									<a href="https://www.linkedin.com/in/andika-andriana/" target="_blank"><i class="fa fa-linkedin"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>
	    	</div>
    	</div>
    </div><!--/#contact-page-->

    <hr/>

    <footer>
  			<div class="container">
  				<div class="row">
  					<p class="text-center">Copyright © 2020 EToko. All rights reserved.</p>
            <p class="text-center">Designed by <span><a target="_blank" href="https://github.com/andika-andriana">Andika Andriana</a></span></p>
  				</div>
  			</div>
  	</footer><!--/Footer-->


  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="/Library/js/gmaps.js"></script>
    <script src="/Library/js/jquery.js"></script>
	<script src="/Library/js/bootstrap.min.js"></script>
	<script src="/Library/js/contact.js"></script>
	<script src="/Library/js/price-range.js"></script>
    <script src="/Library/js/jquery.scrollUp.min.js"></script>
    <script src="/Library/js/jquery.prettyPhoto.js"></script>
    <script src="/Library/js/main.js"></script>
</body>
</html>
