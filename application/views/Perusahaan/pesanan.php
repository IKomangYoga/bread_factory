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
						<th scope="col">ID Order</th>
						<th scope="col">Nama Pemesan</th>
						<th scope="col">Status Pesanan</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php if (isset($pesanan) && !empty($pesanan)) : ?>
						<?php foreach ($pesanan as $p) : ?>
							<tr>
								<td><?= $p->id_order ?></td>
								<td><?= $p->Nama_pegawai_outlet ?></td>
								<td>
									<form method="post" action="<?= base_url('ccompany/update_status') ?>">
										<input type="hidden" name="id_order" value="<?= $p->id_order ?>">
										<select name="status_pesanan" class="form-select form-select-sm">
											<option value="Proses pembuatan" <?= $p->status_pesanan == 'Proses pembuatan' ? 'selected' : '' ?>>Proses pembuatan</option>
											<option value="Terkendala" <?= $p->status_pesanan == 'Terkendala' ? 'selected' : '' ?>>Terkendala</option>
											<option value="Pesanan sudah selesai" <?= $p->status_pesanan == 'Pesanan sudah selesai' ? 'selected' : '' ?>>Pesanan sudah selesai</option>
										</select>
										<button type="submit" class="btn btn-sm btn-primary mt-2">Update</button>
									</form>
								</td>
								<td>
									<button type="button" class="btn btn-sm btn-primary" onclick="window.location.href='<?= base_url('OrderController/detail/' . $p->id_order) ?>'">Detail</button>
								</td>
							</tr>
						<?php endforeach; ?>
					<?php else : ?>
						<tr>
							<td colspan="4">No orders found.</td>
						</tr>
					<?php endif; ?>
				</tbody>
			</table>
		</div>
	</div>
	<!-- End Isi Tabel -->

	<!-- Start Footer Section -->
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
	<!-- End Footer Section -->

	<script src="<?= base_url() ?>assets/asset/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url() ?>assets/asset/js/tiny-slider.js"></script>
	<script src="<?= base_url() ?>assets/asset/js/custom.js"></script>
</body>

</html>