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
        <a href="<?php echo base_url('cdaftarmhs/register') ?>">
          <i class="bi bi-circle"></i><span>Register Mahasiswa</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('Cdaftarcompany/registercompany') ?>" class="active">
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
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"  style="background-color: #012970;"><center><b> <font size="5" color="white">Registration As Company</center></font></b></div>
                <div class="card-body">
                          <form method="POST" action="<?php echo base_url('cdaftarcompany/simpandaftarcompany') ?>">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="Email_Perusahaan" name="Email" placeholder="Masukkan Email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Nama Perusahaan</label>
                                    <input type="text" class="form-control" id="Nama_Perusahaan" name="Nama_Perusahaan" placeholder="Masukkan Nama Perusahaan" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="Password" placeholder="Masukkan Password" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="password" name="Alamat" placeholder="Masukkan Alamat" required>
                                </div>
                                <div class="mb-3">
                                <label for="password" class="form-label">Bidang Industri</label> <br/>
                                <select name="Bidang_Industri" class="form-select">
                                    <option value="">Pilih Bidang Industri</option>
                                    <option value="Industri Komputer">Industri Komputer</option>
                                    <option value="Industri Telekomunikasi">Industri Telekomunikasi</option>
                                    <option value="Internet Provider">Internet Provider</option>
                                    <option value="Industri Konstruksi">Industri Konstruksi</option>
                                    <option value="Industri Pendidikan">Industri Pendidikan</option>
                                    <option value="Industri Elektronik">Industri Elektronik</option>
                                    <option value="Industri Perhotelan">Industri Perhotelan</option>
                                </select>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">No Telepon</label>
                                    <input type="text" class="form-control" id="password" name="No_Telepon" placeholder="Masukkan No Telepon" required>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn" style="background-color: #012970; color: white;" type="submit">Daftar</button>
                                    <button class="btn btn-outline-danger" type="reset">Hapus</button>
                                </div>
                            </form>
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