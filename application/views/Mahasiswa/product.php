
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="<?=base_url()?>assets/asset/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/asset/css/tiny-slider.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/asset/css/style.css" rel="stylesheet">
		<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.html">Bread Factory<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li>
							<a class="nav-link" href="<?php echo base_url('cmhs/dashboard'); ?>">Home</a>
						</li>
						<li class="nav-item active"><a class="nav-link" href="<?php echo base_url('cmhs/product'); ?>">Product</a></li>
						<li><a class="nav-link" href="<?php echo base_url('cmhs/pesanan'); ?>">Pesananmu</a></li>
						<li><a class="nav-link" href="about.html">About us</a></li>
						<li><a class="nav-link" href="services.html">Services</a></li>
						<li><a class="nav-link" href="contact.html">Contact us</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="<?php echo base_url('cmhs/profile'); ?>"><img src="<?=base_url()?>assets/asset/images/user.svg"></a></li>
						<li><a class="nav-link" href="<?php echo base_url('cmhs/keranjang'); ?>"><img src="<?=base_url()?>assets/asset/images/cart.svg"></a></li>
					</ul>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->

		

		

		<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
		      	<div class="row">

                  <div class="col-12  mb-5">
						<div class="subscription-form">
							<h3 class="d-flex align-items-center"><span class="me-1"></span><span>Cari Product!</span></h3>

							<form action="#" class="row g-3">
								<div class="col-auto">
									<input type="text" class="form-control" placeholder="masukan nama product">
								</div>
								<div class="col-auto">
                                <button class="btn btn-black btn-sm" type="button" id="button-addon2">Cari</button>
								</div>
							</form>

						</div>
					</div>
                    
		      		<!-- Start Column 1 -->
                    <?php
                        if (empty($hasil)) {
                            echo "Data Kosong";	
                        } else {
                            $no = 1;
                            foreach ($hasil as $data_roti): 
                    ?>
							<div class="col-12 col-md-4 col-lg-3 mb-5">
								<form action="<?php echo site_url('cmhs/inputKeranjang');?>" method="post" id="myForm<?=$data_roti->id_roti?>">
								<div class="product-item">
									<img src="<?php echo base_url('assets/asset/images/gambar_roti.jpg') ?>" class="img-fluid product-thumbnail">
									<h3 class="product-title"><?php echo $data_roti->jenis_roti?></h3>
									<strong class="product-price"><?php echo "Rp. ".number_format("$data_roti->harga",0,',','.')?></strong>

									<input type="hidden" name="id_roti" value="<?php echo $data_roti->id_roti?>">
									

									<input type="hidden" name="jumlah" value="1">

									<span class="icon-cross" onclick="document.getElementById('myForm<?=$data_roti->id_roti?>').submit()">

										<img src="<?php echo base_url('assets/asset/images/cross.svg');?>" class="img-fluid">
									</span>
									
			

							</div>
								</form>
							</div>
                    <?php
                            $no++;                                       
                            endforeach;
                        }
                    ?>
					<!-- End Column 1 -->
						
		      	</div>
		    </div>
		</div>


		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">
				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Kelompok Bread</a>
            				</p>
						</div>

						

					</div>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->	


		<script src="<?=base_url()?>assets/asset/js/bootstrap.bundle.min.js"></script>
		<script src="<?=base_url()?>assets/asset/js/tiny-slider.js"></script>
		<script src="<?=base_url()?>assets/asset/js/custom.js"></script>
	</body>

</html>
