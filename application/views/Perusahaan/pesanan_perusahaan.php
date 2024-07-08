<?php
// Mengambil data pesanan dari database
$sql = "SELECT m.id_Pegawai_Outlet, r.id_roti, r.nama_roti, r.harga, m.jumlah_pesanan
        FROM memesan m
        JOIN roti r ON m.id_roti = r.id_roti
        WHERE m.id_Pegawai_Outlet = 'id_pegawai_outlet_anda'"; // Sesuaikan dengan ID pegawai outlet yang benar
$result = $conn->query($sql);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <title>Bread Factory</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">Bread Factory</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="dashboard.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="product.php">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pesanan.php">Pesananmu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5">
  <h1>Detail Pesanan</h1>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Gambar Produk</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if ($result->num_rows > 0) {
          $total_belanja = 0;
          while($row = $result->fetch_assoc()) {
              $total = $row['harga'] * $row['jumlah_pesanan'];
              $total_belanja += $total;
              echo "<tr>
                      <td><img src='path/to/images/{$row['id_roti']}.png' alt='Image' class='img-fluid' width='100'></td>
                      <td>{$row['nama_roti']}</td>
                      <td>\${$row['harga']}</td>
                      <td>{$row['jumlah_pesanan']}</td>
                      <td>\${$total}</td>
                      <td><a href='#' class='btn btn-danger btn-sm'>Batal</a></td>
                    </tr>";
          }
      } else {
          echo "<tr><td colspan='6'>Tidak ada pesanan.</td></tr>";
      }
      ?>
    </tbody>
  </table>
  <div class="row">
    <div class="col-md-6">
      <a href="product.php" class="btn btn-outline-dark">Lanjut Berbelanja</a>
    </div>
    <div class="col-md-6 text-right">
      <h4>Total Belanja: $<?php echo $total_belanja; ?></h4>
      <a href="checkout.php" class="btn btn-dark">Lanjut ke Checkout</a>
    </div>
  </div>
</div>

<footer class="footer mt-5 py-3 bg-dark">
  <div class="container text-center text-white">
    <span>&copy; 2024 BreadFactory. Design by BreadFactory Team.</span>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
