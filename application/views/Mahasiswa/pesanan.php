
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
						<li class="nav-item active">
							<a class="nav-link" href="<?php echo base_url('cmhs/dashboard'); ?>">Home</a>
						</li>
						<li><a class="nav-link" href="<?php echo base_url('cmhs/product'); ?>">Product</a></li>
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

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Cart</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<div class="untree_co-section before-footer-section">
            <div class="container">
              <div class="row mb-5">
                <form class="col-md-12" method="post">
                  <div class="site-blocks-table">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="product-thumbnail">Gambar Product</th>
                          <th class="product-name">Product</th>
                          <th class="product-price">Price</th>
                          <th class="product-quantity">Jumlah pesanan</th>
                          <th class="product-total">Total</th>
                          <th class="product-remove">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            if (empty($hasil)) {
                                echo "Data Kosong";	
                            } else {
                                $no = 1;
                                foreach ($hasil as $data_roti): 
                        ?>
                            <tr>
                            <td class="product-thumbnail">
                                <img src="images/product-1.png" alt="Image" class="img-fluid">
                            </td>
                            <td class="product-name">
                                <h2 class="h5 text-black"><?php echo $data_roti->jenis_roti ?></h2>
                            </td>
                            <td><?php echo "Rp. ".number_format("$data_roti->harga",0,',','.') ?></td>

                            <td>
                                <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                                </div>
                                <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-black increase" type="button">&plus;</button>
                                </div>
                                </div>
            
                            </td>
                            <td>$49.00</td>
                            <td><a href="#" class="btn btn-black btn-sm">X</a></td>
                            </tr>
        
                        <?php
                            $no++;                                       
                            endforeach;
                            }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </form>
              </div>
        
              <div class="row">
                <div class="col-md-6">
                  <div class="row mb-5">
                    <!-- <div class="col-md-6 mb-3 mb-md-0">
                      <button class="btn btn-black btn-sm btn-block">Update Cart</button>
                    </div> -->
                    <div class="col-md-6">
                      <button class="btn btn-outline-black btn-sm btn-block">Continue Shopping</button>
                    </div>
                  </div>
                  <!-- <div class="row">
                    <div class="col-md-12">
                      <label class="text-black h4" for="coupon">Coupon</label>
                      <p>Enter your coupon code if you have one.</p>
                    </div>
                    <div class="col-md-8 mb-3 mb-md-0">
                      <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
                    </div>
                    <div class="col-md-4">
                      <button class="btn btn-black">Apply Coupon</button>
                    </div>
                  </div> -->
                </div>
                <div class="col-md-6 pl-5">
                  <div class="row justify-content-end">
                    <div class="col-md-7">
                      <div class="row">
                        <div class="col-md-12 text-right border-bottom mb-5">
                          <h3 class="text-black h4 text-uppercase">Total Harga</h3>
                        </div>
                      </div>
                      <!-- <div class="row mb-3">
                        <div class="col-md-6">
                          <span class="text-black">Subtotal</span>
                        </div>
                        <div class="col-md-6 text-right">
                          <strong class="text-black">$230.00</strong>
                        </div>
                      </div> -->
                      <div class="row mb-5">
                        <div class="col-md-6">
                          <span class="text-black">Total</span>
                        </div>
                        <div class="col-md-6 text-right">
                          <strong class="text-black">$230.00</strong>
                        </div>
                      </div>
        
                      <div class="row">
                        <div class="col-md-12">
                          <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='checkout.html'">Proceed To Checkout</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
