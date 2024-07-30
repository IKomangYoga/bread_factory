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
						<li class="nav-item active"><a class="nav-link" href="<?php echo base_url('cmhs/about_us'); ?>">About us</a></li>
						
						
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="<?php echo base_url('cmhs/profile'); ?>"><img src="<?=base_url()?>assets/asset/images/user.svg"></a></li>
						<li><a class="nav-link" href="<?php echo base_url('cmhs/keranjang'); ?>"><img src="<?=base_url()?>assets/asset/images/cart.svg"></a></li>
					</ul>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->

		<div class="untree_co-section">
		    <div class="container">
		      
		      <div class="row">
		        <div class="col-md-6 mb-5 mb-md-0">
		          <h2 class="h3 mb-3 text-black">Detail Billing</h2>
		          <div class="p-3 p-lg-5 border bg-white">
		            
				  <div class="form-group row">
		              <div class="col-md-12">
		                <label for="c_companyname" class="text-black">ID </label>
		                <input type="text" class="form-control" id="c_companyname" name="c_companyname" placeholder="<?= $memesan[0]->id_Pegawai_Outlet?>">
		              </div>
		            </div>

		            <div class="form-group row">
		              <div class="col-md-12">
		                <label for="c_companyname" class="text-black">Tanggal Pemabayaran </label>
		                <input type="date" class="form-control" id="c_companyname" name="c_companyname">
		              </div>
		            </div>

                    <div class="form-group row">
		              <div class="col-md-12">
		                <label for="c_address" class="text-black">Jumlah Pesanan <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="c_address" name="c_address" placeholder="jumlah">
		              </div>
		            </div>
					<div class="form-group row">
		              <div class="col-md-12">
		                <label for="c_address" class="text-black">Tanggal Memesan <span class="text-danger">*</span></label>
		                <input type="date" class="form-control" id="c_address" name="c_address" placeholder="jumlah">
		              </div>
		            </div>		            

		            <div class="form-group">
		              <label for="c_order_notes" class="text-black">catatan</label>
		              <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."></textarea>
		            </div>

		          </div>
		        </div>
		        <div class="col-md-6">

                

		          <div class="row mb-5">
		            <div class="col-md-12">
		              <h2 class="h3 mb-3 text-black">Your Order</h2>
		              <div class="p-3 p-lg-5 border bg-white">
		                <table class="table site-block-order-table mb-5">
		                  <thead>
		                    <th>Nama Product x jumlah</th>
		                    <th>Total</th>
		                  </thead>
		                  <tbody>
                            <?php foreach ($memesan as $row): ?>

                            <tr>

                                <td> <?php echo $row->jenis_roti; ?> <strong class="mx-2">x</strong> <?php echo $row->jumlah_pesanan; ?></td>
                                <td><?php echo $row->jumlah_pesanan; ?></td>

                            </tr>

                            <?php endforeach; ?>
		                    
		                    </tr>
		                  </tbody>
		                </table>

						<!-- Form pembayaran -->
                        <div class="border p-3 mb-5">
							<h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Form Pembayaran</a></h3>
							<div class="collapse" id="collapsepaypal">
								<div class="py-2">
								<p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro voluptates quia rerum beatae ab delectus</p>
								<form action="<?php echo base_url('Cmhs/proses_insert_pembayaran');?>" method="post">
									<div class="form-group">
									<label for="Nama_Mekanisme">Mekanisme Pembayaran</label>
									<select class="form-control" id="Nama_Mekanisme" name="Nama_Mekanisme" required aria-label="Nama Mekanisme">
										<option value="none" disabled selected>Pilih salah satu</option>    
										<option value="MBangking">MBangking</option>
										<option value="COD">COD</option>
									</select>
									</div>
									<div class="form-group">
									<label for="Nomor_Rekening">Nomor Rekening</label>
									<input type="number" class="form-control" id="Nomor_Rekening" name="Nomor_Rekening" required aria-label="Nomor Rekening">
									</div>
									<div class="form-group">
									<label for="Nama_Bank">Nama Bank</label>
									<select class="form-control" id="Nama_Bank" name="Nama_Bank" required aria-label="Nama Bank">
										<option value="" disabled selected>Pilih salah satu</option>    
										<option value="BNI">BNI</option>
										<option value="BCA">BCA</option>
									</select>
									</div>
									<br>
									<button type="submit" class="btn btn-black btn-lg py-3 btn-block">Make Payment</button>                               
								</form>
								</div>
							</div>
						</div>
						<!-- End form pembayaran -->

		                <div class="form-group">
		                  <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='thankyou.html'">Place Order</button>
		                </div>

		              </div>
		            </div>
		          </div>

		        </div>
		      </div>
		      <!-- </form> -->
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
