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
	<title>Tambah Produk - Furni</title>
</head>

<body>
    
    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" aria-label="Furni navigation bar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Bread Factory<span>.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url('ccompany/dashboard'); ?>">Home</a>
                    </li>
                    <li><a class="nav-link" href="<?php echo base_url('ccompany/pesanan_perusahaan'); ?>">Pesanan</a></li>
                    <li><a class="nav-link" href="<?php echo base_url('ccompany/tambah_roti'); ?>">Tambah Product</a></li>
                </ul>
                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li><a class="nav-link" href="<?php echo base_url('ccompany/profile'); ?>"><img src="<?= base_url() ?>assets/asset/images/user.svg"></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h1>Tambah Produk Baru</h1>

        <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

        <?php echo form_open('Ccompany/tambah_roti'); ?>
        
        <div class="mb-3">
            <label for="jenis_roti" class="form-label">Jenis Roti</label>
            <input type="text" name="jenis_roti" class="form-control" value="<?php echo set_value('jenis_roti'); ?>" />
        </div>
        
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" name="harga" class="form-control" value="<?php echo set_value('harga'); ?>" />
        </div>
        
        <button type="submit" class="btn btn-primary">Tambah Produk</button>
        
        </form>
    </div>

    <!-- JavaScript and dependencies -->
    <script src="<?= base_url() ?>assets/asset/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/asset/js/tiny-slider.js"></script>
    <script src="<?= base_url() ?>assets/asset/js/main.js"></script>
</body>
</html>
