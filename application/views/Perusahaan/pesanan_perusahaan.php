<div class="container mt-5">
    <h2 class="mb-4">Daftar Pesanan</h2>
    <?php print_r($pesanan); ?> <!-- Debugging line to check data -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Gambar Produk</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($pesanan)): ?>
                    <?php foreach($pesanan as $row): ?>
                        <tr>
                            <td>
                                <img src="<?= base_url('path/to/images/' . (isset($row->id_roti) ? $row->id_roti : 'placeholder') . '.png'); ?>" alt="Image" class="img-fluid" width="100" onerror="this.onerror=null;this.src='<?= base_url('path/to/images/placeholder.png'); ?>';">
                            </td>
                            <td><?= htmlspecialchars(isset($row->nama_roti) ? $row->nama_roti : ''); ?></td>
                            <td>Rp <?= number_format(isset($row->harga) ? $row->harga : 0, 0, ',', '.'); ?></td>
                            <td><?= htmlspecialchars(isset($row->jumlah_pesanan) ? $row->jumlah_pesanan : 0); ?></td>
                            <td>Rp <?= number_format((isset($row->harga) ? $row->harga : 0) * (isset($row->jumlah_pesanan) ? $row->jumlah_pesanan : 0), 0, ',', '.'); ?></td>
                            <td>
                                <form method="post" action="<?= base_url('OrderController/update_status/' . (isset($row->id) ? $row->id : '')); ?>">
                                    <select name="status" class="form-control" onchange="this.form.submit()">
                                        <option value="Dibuat" <?= isset($row->order_status) && $row->order_status == 'Dibuat' ? 'selected' : ''; ?>>Dibuat</option>
                                        <option value="Dikirim" <?= isset($row->order_status) && $row->order_status == 'Dikirim' ? 'selected' : ''; ?>>Dikirim</option>
                                        <option value="Sudah Sampai" <?= isset($row->order_status) && $row->order_status == 'Sudah Sampai' ? 'selected' : ''; ?>>Sudah Sampai</option>
                                    </select>
                                </form>
                            </td>
                            <td><a href="<?= base_url('OrderController/batal/' . (isset($row->id) ? $row->id : '')); ?>" class="btn btn-danger btn-sm">Batal</a></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan='7' class='text-center'>Tidak ada pesanan.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
