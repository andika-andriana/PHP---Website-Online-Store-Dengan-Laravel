<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>E-Toko | Cart</title>
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

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="/">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
            <?php $total = 0; ?>
            @foreach($keranjang as $krj)
                <tr>
    							<td class="cart_product">
    								<a href=""><img src="/data_file/{{$krj->gambar}}" alt=""></a>
    							</td>
    							<td class="cart_description">
    								<h4><a href="">{{$krj->nama_produk}}</a></h4>
    							</td>
    							<td class="cart_price">
    								<p>Rp. {{$krj->harga}}</p>
    							</td>
    							<td class="cart_quantity">
    								<p>{{$krj->jumlah}}</p>
    							</td>
    							<td class="cart_total">
    								<p class="cart_total_price">Rp. {{ $krj->jumlah * $krj->harga }}</p>
    							</td>
    						</tr>
                <?php $total += ($krj->jumlah * $krj->harga) ?>
                @endforeach
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Total <span>Rp. {{$total}}</span></li>
						</ul>
							<a class="btn btn-default check_out" href="/Checkout">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

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
	<script src="/Library/js/bootstrap.min.js"></script>
	<script src="/Library/js/jquery.scrollUp.min.js"></script>
  <script src="/Library/js/jquery.prettyPhoto.js"></script>
  <script src="/Library/js/main.js"></script>
</body>
</html>
