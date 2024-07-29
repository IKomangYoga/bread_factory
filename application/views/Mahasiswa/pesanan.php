<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Pesanan</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .container {
            margin-top: 20px;
        }
        .table img {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Manajemen Pesanan Outlet</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Pesanan</th>
                <th>Nama Outlet</th>
                <th>Tanggal Pesanan</th>
                <th>Jumlah Pesanan</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($pesanan)): ?>
                <?php foreach($pesanan as $row): ?>
                    <tr>
                        <td><?= $row->id_pesanan; ?></td>
                        <td><?= $row->Nama_pegawai_outlet; ?></td>
                        <td><?= $row->tanggal_pesanan; ?></td>
                        <td><?= $row->jumlah_pesanan; ?></td>
                        <td>
                            <form method="post" action="<?= base_url('OrderController/update_status/' . $row->id_pesanan); ?>">
                                <select name="status" class="form-control" onchange="this.form.submit()">
                                    <option value="Dibuat" <?= $row->status_pesanan == 'Dibuat' ? 'selected' : ''; ?>>Dibuat</option>
                                    <option value="Delivery" <?= $row->status_pesanan == 'Delivery' ? 'selected' : ''; ?>>Delivery</option>
                                    <option value="Sudah Sampai" <?= $row->status_pesanan == 'Sudah Sampai' ? 'selected' : ''; ?>>Sudah Sampai</option>
                                </select>
                            </form>
                        </td>
                        <t<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Pesanan</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .container {
            margin-top: 20px;
        }
        .table img {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Manajemen Pesanan Outlet</h1>
    <?php if(session()->getFlashdata('message')): ?>
        <div class="alert alert-info">
            <?= session()->getFlashdata('message'); ?>
        </div>
    <?php endif; ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Pesanan</th>
                <th>Nama Outlet</th>
                <th>Tanggal Pesanan</th>
                <th>Jumlah Pesanan</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($pesanan)): ?>
                <?php foreach($pesanan as $row): ?>
                    <tr>
                        <td><?= $row['id_pesanan']; ?></td>
                        <td><?= $row['Nama_pegawai_outlet']; ?></td>
                        <td><?= $row['tanggal_pesanan']; ?></td>
                        <td><?= $row['jumlah_pesanan']; ?></td>
                        <td>
                            <form method="post" action="<?= base_url('OrderController/update_status/' . $row['id_outlet']); ?>">
                                <select name="status" class="form-control" onchange="this.form.submit()">
                                    <option value="Dibuat" <?= $row['status_pesanan'] == 'Dibuat' ? 'selected' : ''; ?>>Dibuat</option>
                                    <option value="Delivery" <?= $row['status_pesanan'] == 'Delivery' ? 'selected' : ''; ?>>Delivery</option>
                                    <option value="Sudah Sampai" <?= $row['status_pesanan'] == 'Sudah Sampai' ? 'selected' : ''; ?>>Sudah Sampai</option>
                                </select>
                            </form>
                        </td>
                        <td><a href="<?= base_url('OrderController/batal/' . $row['id_pesanan']); ?>" class="btn btn-danger btn-sm">Batal</a></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="6" class="text-center">Tidak ada pesanan.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script src="<?=base_url()?>assets/asset/js/bootstrap.bundle.min.js"></script>
</body>
</html>
d><a href="<?= base_url('OrderController/batal/' . $row->id_outlet); ?>" class="btn btn-danger btn-sm">Batal</a></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="6" class="text-center">Tidak ada pesanan.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script src="<?=base_url()?>assets/asset/js/bootstrap.bundle.min.js"></script>
</body>
</html>
