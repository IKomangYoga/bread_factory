<?php $this->load->view('partial/header'); ?>
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
    <!-- Ini adalah navbar utama Anda -->
    <nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
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
                    <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                        <li><a class="nav-link" href="<?php echo base_url('ccompany/profile'); ?>"><img src="<?= base_url() ?>assets/asset/images/user.svg"></a></li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    <!-- Bagian Hero atau Banner yang menampilkan gambar besar dan teks -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Bread Factory <span clsas="d-block">Roti Enak </span></h1>
                        <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
                        <p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="<?= base_url() ?>assets/asset/images/roti.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- Start Footer Section -->
    <!-- Bagian footer di bagian bawah halaman -->
    <footer class="footer-section">
        <div class="container relative">
            <div class="border-top copyright">
                <div class="row pt-4">
                    <div class="col-lg-6">
                        <p class="mb-2 text-center text-lg-start">Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Kelompok Bread</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Section -->

    <!-- JavaScript and dependencies -->
    <script src="<?= base_url() ?>assets/asset/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/asset/js/tiny-slider.js"></script>
    <script src="<?= base_url() ?>assets/asset/js/custom.js"></script>
</body>

</html>
