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
		<title>Bread Factory</title>
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
						<li >
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

		<div class="untree_co-section before-footer-section">
            <div class="container">
              <div class="row mb-5">
                <form class="col-md-12" action="<?= base_url('Cmhs/insertpesanan'); ?>" method="post">
                  <div class="site-blocks-table">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="product-thumbnail">Gambar Product</th>
                          <th class="product-name">Nama Product</th>
                          <th class="product-price">Harga</th>
                          <th class="product-quantity">Jumlah</th>
                          <th class="product-total">Total</th>
                          <th class="product-remove">Aksi</th>
                        </tr>
                      </thead>
                      <?php $total_price = 0;?>
                      <?php
                      foreach ($keranjang as $row):
                          $total_harga = $row['harga'] * $row['jumlah'];
                          $total_price += $total_harga;
                      ?>
                      
                          <tr>
                              <td class="product-thumbnail">
                                  <img src="images/product-1.png" alt="Image" class="img-fluid">
                              </td>
                              <td class="product-name">
                                  <h2 class="h5 text-black"><?php echo $row['jenis_roti']; ?></h2>
                              </td>
                              <td>Rp.<?php echo number_format($row['harga'], 0, ',', '.'); ?></td>
                              <!-- <td>Rp.<?php echo $row['harga']; ?></td> -->
                              <td>
                                  <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                                      <div class="input-group-prepend">
                                          <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                                      </div>
                                      <input type="text" class="form-control text-center quantity-amount" value="<?php echo $row['jumlah']; ?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                      <div class="input-group-append">
                                          <button class="btn btn-outline-black increase" type="button">&plus;</button>
                                      </div>
                                  </div>
                              </td>
                              <td>Rp.<?php echo number_format($total_harga, 0, ',', '.'); ?></td>
                              <td><a href="<?= base_url('Cmhs/delete_keranjang/'.$row['id_keranjang']) ?>" class="btn btn-danger btn-sm">Batal</a></td>
                          </tr>
                      <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </form>
              </div>
        
              <div class="row">
                <div class="col-md-6">
                  <div class="row mb-5">                   
                    <div class="col-md-6">
                        <button class="btn btn-outline-black btn-sm btn-block" onclick="window.location.href='<?php echo base_url('Cmhs/product'); ?>'">Lanjut Berbelanja</button>
                    </div>
                  </div>
                  
                </div>
                <div class="col-md-6 pl-5">
                
                  <div class="row justify-content-end">
                    <div class="col-md-7">
                      <div class="row">
                        <div class="col-md-12 text-right border-bottom mb-5">
                          <h3 class="text-black h4 text-uppercase">Total Belanja</h3>
                        </div>
                      </div>
                      <div class="row mb-3">
                        
                      </div>
                      <div class="row mb-5">
                        <div class="col-md-6">
                          <span class="text-black">Total</span>
                        </div>
                        <div class="col-md-6 text-right">
                          <strong class="text-black">Rp.<?= number_format($total_price, 0, ',', '.');?></strong>
                        </div>
                      </div>
        
                      <div class="row">
                          <div class="col-md-12">
                              
                              <form id="checkout-form" action="<?= base_url('Cmhs/insertpesanan'); ?>" method="post">

                              <?php foreach ($keranjang as $row): ?>

                              <input type="hidden" name="id_roti[]" value="<?php echo $row['id_roti']; ?>">

                              <input type="hidden" name="jumlah[]" value="<?php echo $row['jumlah']; ?>">

                              <?php endforeach; ?>

                              <input type="hidden" name="tanggal_pesan" value="<?php echo date('Y-m-d'); ?>">

                              

                              <button class="btn btn-black btn-lg py-3 btn-block" type="submit">Lanjut ke Checkout</button>

                              </form>
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
