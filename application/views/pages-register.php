<?=$header?>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a class="logo d-flex align-items-center">
    <img src="gambar/teslogo.png" alt="">
    <span class="d-none d-lg-block" style="color: white;">PKL Finder</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->


      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->
<body>

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-box-arrow-in-right"></i><span>Login</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?php echo base_url('cdaftarmhs/login')?>">
          <i class="bi bi-circle"></i><span>Login Mahasiswa</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('Cdaftarcompany/logincompany')?>">
          <i class="bi bi-circle"></i><span>Login Perusahaan</span>
        </a>
      </li>
    </ul>
  </li><!-- End Components Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-card-list"></i><span>Registration</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?php echo base_url('cdaftarmhs/register') ?>" class="active">
          <i class="bi bi-circle"></i><span>Register Mahasiswa</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('Cdaftarcompany/registercompany') ?>">
          <i class="bi bi-circle"></i><span>Register Perusahaan</span>
        </a>
      </li>
    </ul>
  </li><!-- End Charts Nav -->

  </ul>

</ul>

</aside><!-- End Sidebar-->

<body>

  <main>
    <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header"  style="background-color: #012970;"><center><b> <font size="5" color="white">Registration</center></font></b></div>
                <div class="card-body">
                    <?php echo form_open_multipart('cdaftarmhs/simpandaftarmhs'); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username" class="form-label">NIM</label>
                                    <input type="text" class="form-control" id="nama" name="Nim" placeholder="Masukkan Nim Anda" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username" class="form-label">No Telepon</label>
                                    <input type="text" class="form-control" id="nama" name="No_Telepon" placeholder="Masukkan No Telepon Anda" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="Nama" placeholder="Masukkan Nama Anda" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="nama" name="Email" placeholder="Masukkan Email Anda" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                <label for="username" class="form-label">Password</label> <br/>
                                <input type="password" class="form-control" name="Password" placeholder="Masukkan Password Anda" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Alamat</label> <br/>
                                    <input type="text" class="form-control" id="nama" name="Alamat" placeholder="Masukkan Alamat Anda" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                <label for="username" class="form-label">Jurusan</label> <br/>
                                <select class="form-select" name="Jurusan">
                                    <option value="">Pilih Jurusan</option>
                                    <option value="Teknik Elektro">Teknik Elektro</option>
                                    <option value="Teknik Listrik">Teknik Listrik</option>
                                    <option value="Teknik Sipil">Teknik Sipil</option>
                                    <option value="Teknik Mesin">Teknik Mesin</option>
                                    <option value="Akuntansi">Akuntansi</option>
                                    <option value="Administrasi Niaga">Administrasi Niaga</option>
                                    <option value="Pariwisata">Pariwisata</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Jenis Kelamin</label> <br/>
                                    <select class="form-select" name="Jenis_Kelamin">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                <label for="password" class="form-label">Program Studi</label> <br/>
                                <select class="form-select" name="Prodi">
                                    <option value="">Pilih Program Studi</option>
                                    <option value="D3 Teknik Listrik">D3 Teknik Listrik</option>
                                    <option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
                                    <option value="D4 Teknik Otomasi">D4 Teknik Otomasi</option>
                                    <option value="D4 TRPL">D4 TRPL</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                <label for="password" class="form-label">Bukti KTM (JPEG/JPG)</label> <br/>
                                <input type="file" class="form-control" id="nama" name="Bukti_Ktm">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="mb-3">
                                <label for="password" class="form-label" >Upload CV (PDF)</label> <br/>
                                <input type="file" class="form-control" id="nama" name="Cv" >
                                </div>
                            </div>
                        <div class="d-grid gap-2">
                        <button class="btn" style="background-color: #012970; color: white;" type="submit">Daftar</button>
                        <button class="btn btn-outline-danger" type="reset">Hapus</button>
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
      </section>

    </div>
  </main><!-- End #main -->
  <?=$footer?>
</body>

</html>