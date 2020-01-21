<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>E-Toko | Home</title>
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

	<section id="slider"><!--slider-->
		<div id="slider-carousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
			  <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#slider-carousel" data-slide-to="1"></li>
				<li data-target="#slider-carousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" style="height:600px; margin-left:15px">
				<div class="item active">
          <img src="https://images.pexels.com/photos/1128678/pexels-photo-1128678.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" style="width:1120px"/>
				</div>
				<div class="item">
          <img src="https://images.pexels.com/photos/934066/pexels-photo-934066.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"  alt="" style="width:1120px"/>
				</div>
				<div class="item">
					<img src="https://images.pexels.com/photos/1099680/pexels-photo-1099680.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" style="width:1120px"/>
				</div>
			</div>
		</div>
	</section><!--/slider-->

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-9 padding-left">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
            @foreach($barang as $brg)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="/data_file/{{$brg->gambar}}" alt="" style="height:200px;"/>
											<h2>Rp. {{$brg->harga}}</h2>
											<p>{{$brg->nama_produk}}</p>
                      <?php if ($id != null) {?>
											<button data-toggle="modal" data-target="#myModal"  data-id="{{ $brg->id }}" class="btn btn-default add-to-cart jumlah"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                      <?php } else {
     } ?>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>Rp. {{$brg->harga}}</h2>
												<p>{{$brg->nama_produk}}</p>
                        <?php if ($id != null) {?>
  											<button data-toggle="modal" data-target="#myModal"  data-id="{{ $brg->id }}" class="btn btn-default add-to-cart jumlah"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                        <?php } else {
     } ?>
											</div>
										</div>
								</div>
							</div>
						</div>
            @endforeach
					</div><!--features_items-->
				</div>
        <div class="col-sm-3">
          <div class="right-sidebar">
            <div class="text-center"><!--shipping-->
              <img src="/Library/images/home/store.png" style="height:360px" alt="" />
            </div><!--/shipping-->
          </div>
        </div>
			</div>
		</div>
	</section>

<hr/>

  <footer>
			<div class="container">
				<div class="row">
					<p class="text-center">Copyright © 2020 EToko. All rights reserved.</p>
          <p class="text-center">Designed by <span><a target="_blank" href="https://github.com/andika-andriana">Andika Andriana</a></span></p>
				</div>
			</div>
	</footer><!--/Footer-->

  <!-- Modal -->
         <div class="modal fade" id="myModal" role="dialog">
           <div class="modal-dialog">
             <form action="/AddCart" method="post">
             <!-- Modal content-->
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title">Masukan Jumlah</h4>
               </div>
               <div class="modal-body">
                 <input type="hidden" id="id_barang" class="id_barang" name="id_barang" value="3487">
                 <div class="form-group">
                   <label for="exampleInputEmail1">Jumlah Beli</label>
                   <input type="text" class="form-control " id="jumlah" name="jumlah" placeholder="Jumlah Beli">
                 </div>
               </div>
               <div class="modal-footer">
                 <button type="submit" class="btn btn-default">Beli</button>
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
             </div>
           </form>
           </div>
         </div>
        </div>

  <script src="/Library/js/jquery.js"></script>
	<script src="/Library/js/bootstrap.min.js"></script>
	<script src="/Library/js/jquery.scrollUp.min.js"></script>
	<script src="/Library/js/price-range.js"></script>
  <script src="/Library/js/jquery.prettyPhoto.js"></script>
  <script src="/Library/js/main.js"></script>

  <script type="text/javascript">
   $(".jumlah").click(function() {
    $(".id_barang").val($(this).attr('data-id'));
    });

   </script>
</body>
</html>
