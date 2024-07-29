<?php $this->load->view('partial/header'); ?>
<!doctype html>
<html lang="en">
    <h2 class="mb-4">Daftar Pesanan</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
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

                <tr>
                    <th>ID Outlet</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Tanggal Pesan</th>
                    <th>Status Pesanan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

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
    </div>
</div>

</nav>
                <?php if (!empty($pesanan)): ?>
                    <?php foreach($pesanan as $row): ?>
                        <tr>
                            <td><?= htmlspecialchars(isset($row->id_outlet) ? $row->id_outlet : ''); ?></td>
                            <td><?= htmlspecialchars(isset($row->jumlah_pesanan) ? $row->jumlah_pesanan : 0); ?></td>
                            <td>Rp <?= number_format((isset($row->harga) ? $row->harga : 0) * (isset($row->jumlah_pesanan) ? $row->jumlah_pesanan : 0), 0, ',', '.'); ?></td>
                            <td><?= htmlspecialchars(isset($row->tanggal_pesan) ? date('d-m-Y', strtotime($row->tanggal_pesan)) : ''); ?></td>
                            <td>
                            <form method="post" action="<?= base_url('Ccompany/update_status/' . (isset($row->id_outlet) ? $row->id_outlet : '')); ?>">
    <select name="status" class="form-control" onchange="this.form.submit()">
        <option value="Dibuat" <?= isset($row->status_pesanan) && $row->status_pesanan == 'Dibuat' ? 'selected' : ''; ?>>Dibuat</option>
        <option value="Dikirim" <?= isset($row->status_pesanan) && $row->status_pesanan == 'Dikirim' ? 'selected' : ''; ?>>Dikirim</option>
        <option value="Sudah Sampai" <?= isset($row->status_pesanan) && $row->status_pesanan == 'Sudah Sampai' ? 'selected' : ''; ?>>Sudah Sampai</option>
    </select>
</form>

                            </td>
                            <td><a href="<?= base_url('Perusahaan/pesanan_perusahaan/' . (isset($row->id) ? $row->id : '')); ?>" class="btn btn-danger btn-sm">Batal</a></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan='7' class='text-center'>Tidak ada pesanan.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
