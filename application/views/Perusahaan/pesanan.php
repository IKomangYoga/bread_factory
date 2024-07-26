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
	<link href="<?= base_url() ?>assets/asset/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/asset/css/tiny-slider.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/asset/css/style.css" rel="stylesheet">
	<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
</head>

<body>

	<!-- Start Header/Navigation -->
	<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark " arial-label="Furni navigation bar">

		<div class="container">
			<a class="navbar-brand" href="index.html">Bread Factory<span>.</span></a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsFurni">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
					<li>
						<a class="nav-link" href="<?php echo base_url('ccompany/dashboard'); ?>">Home</a>
					</li>
					<li class="nav-item active"><a class="nav-link" href="<?php echo base_url('ccompany/pesanan_perusahaan'); ?>">Pesanan</a></li>
					<li><a class="nav-link" href="<?php echo base_url('ccompany/tambah product'); ?>">Product</a></li>
					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="<?php echo base_url('ccompany/profile'); ?>"><img src="<?= base_url() ?>assets/asset/images/user.svg"></a></li>
					</ul>
			</div>
		</div>

	</nav>
	<!-- End Header/Navigation -->

	<!-- Start Hero Section -->
	<div class="hero">
		<div class="container">
			<div class="d-flex justify-content-center ">
				<h1>Pesanan Pelanggan Setia, Bread Factory</h1>
			</div>
		</div>
	</div>
	<!-- End Hero Section -->

	<!-- Start Isi Tabel -->
	<div class="container mt-4">
		<div class="col-lg-8-center">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>ID Order</th>
						<th>Nama Pegawai</th>
						<th>Status Pesanan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($pesanan as $order) : ?>
						<tr>
							<td><?php echo $order->id_memesan; ?></td>
							<td><?php echo $order->Nama_pegawai_outlet; ?></td>
							<td><?php echo $order->status_pesanan; ?>


								<form method="post" action="<?php echo base_url('Ccompany/update_status'); ?>">
									<input type="hidden" name="id_memesan" value="<?php echo $order->id_memesan; ?>">
									<select name="status">
										<option value="Proses" <?php if ($order->status_pesanan == 'Proses') echo 'selected'; ?>>Proses</option>
										<option value="Selesai" <?php if ($order->status_pesanan == 'Selesai') echo 'selected'; ?>>Selesai</option>
										<option value="Kendala" <?php if ($order->status_pesanan == 'Kendala') echo 'selected'; ?>>Kendala</option>
									</select>
									<button type="submit">Update</button>
								</form>
							</td>
							<td>
								<a href="detail/<?php echo $order->id_memesan; ?>">Detail</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
	<!-- End Isi Tabel -->

	<!-- Start Footer Section -->
	<div class="fixed-bottom">
	<footer class="footer-section">
		<div class="container relative">
			<div class="border-top copyright">
				<div class="row pt-4">
					<div class="col-lg-6">
						<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script>. All Rights Reserved. &mdash; Designed with love by Kelompok Bread</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	</div>

	<!-- End Footer Section -->

	<script src="<?= base_url() ?>assets/asset/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url() ?>assets/asset/js/tiny-slider.js"></script>
	<script src="<?= base_url() ?>assets/asset/js/custom.js"></script>
</body>

</html>