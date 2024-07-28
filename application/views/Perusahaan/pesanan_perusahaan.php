<table class="table table-bordered">
    <thead>
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
                  <td><img src="<?= base_url('path/to/images/' . $row->id_roti . '.png'); ?>" alt="Image" class="img-fluid" width="100"></td>
                  <td><?= $row->nama_roti; ?></td>
                  <td><?= $row->harga; ?></td>
                  <td><?= $row->jumlah_pesanan; ?></td>
                  <td><?= $row->harga * $row->jumlah_pesanan; ?></td>
                  <td>
                      <form method="post" action="<?= base_url('OrderController/update_status/' . $row->id); ?>">
                          <select name="status" onchange="this.form.submit()">
                              <option value="Dibuat" <?= $row->order_status == 'Dibuat' ? 'selected' : ''; ?>>Dibuat</option>
                              <option value="Dikirim" <?= $row->order_status == 'Dikirim' ? 'selected' : ''; ?>>Dikirim</option>
                              <option value="Sudah Sampai" <?= $row->order_status == 'Sudah Sampai' ? 'selected' : ''; ?>>Sudah Sampai</option>
                          </select>
                      </form>
                  </td>
                  <td><a href="#" class="btn btn-danger btn-sm">Batal</a></td>
              </tr>
          <?php endforeach; ?>
      <?php else: ?>
          <tr><td colspan='7'>Tidak ada pesanan.</td></tr>
      <?php endif; ?>
    </tbody>
</table>
