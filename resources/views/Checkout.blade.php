<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>E-Toko | Checkout</title>
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

  <section id="cart_items">
    <div class="container">
      <div class="breadcrumbs">
        <ol class="breadcrumb">
          <li><a href="/">Home</a></li>
          <li class="active">Checkout</li>
        </ol>
      </div>
      <!--/breadcrums-->


      <div class="review-payment">
        <h2>Review & Payment</h2>
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
            @foreach($checkout as $ckt)
            <tr>
              <td class="cart_product">
                <a href=""><img src="/data_file/{{$ckt->gambar}}" alt=""></a>
              </td>
              <td class="cart_description">
                <h4><a href="">{{$ckt->nama_produk}}</a></h4>
              </td>
              <td class="cart_price">
                <p>Rp {{$ckt->harga}}</p>
              </td>
              <td class="cart_quantity">
                {{$ckt->jumlah}}
              </td>
              <td class="cart_total">
                <p class="cart_total_price">Rp{{$ckt->harga * $ckt->jumlah}}</p>
            </tr>
            <?php $total += ($ckt->jumlah * $ckt->harga) ?>
            @endforeach

            <tr>
              <td colspan="4">&nbsp;</td>
              <td colspan="2">
                <table class="table table-condensed total-result">
                  <tr>
                    <td>Total</td>
                    <td><span>Rp{{$total}}</span></td>
                  </tr>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="payment-options">

      </div>
    </div>
  </section>
  <!--/#cart_items-->
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
