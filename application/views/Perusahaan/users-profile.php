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
		<link href="<?=base_url()?>assets/asset/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/asset/css/tiny-slider.css" rel="stylesheet">
		<link href="<?=base_url()?>assets/asset/css/style.css" rel="stylesheet">
		<title>Bread Factory</title>
	</head>
<body>
      <!-- Start Header/Navigation -->
      <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url('Cdaftarcompany/logincompany')?>">Bread Factory<span>.</span></a>
        <button  class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
          <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
            <li>
              <a class="nav-link" href="<?php echo base_url('Ccompany/dashboard'); ?>">Home</a>
            </li>
            <li><a class="nav-link" href="<?php echo base_url('ccompany/pesanan_perusahaan'); ?>">Pesanan</a></li>
            <li><a class="nav-link" href="<?php echo base_url('Ccompany/product'); ?>">Product</a></li>
          </ul>

          <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
            <li><a class="nav-link" href="<?php echo base_url('cmhs/profile'); ?>"><img src="<?=base_url()?>assets/asset/images/user.svg"></a></li>
          </ul>
        </div>
      </div>
        
      </nav>
      <!-- End Header/Navigation -->

    <br>
  <main id="main" class="main">
<div class="container">
    <section class="section profile">
      <div class="row">
        <div class="col-xl-5">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
            <?php
              if(empty($this->session->userdata('foto')))
              {
            ?>
              <img src="<?=base_url()?>/assets/foto/empty.jpeg" alt="Profile" class="rounded-circle">
            <?php  
              } else{
            ?>
              <img src="<?=base_url()?>/assets/foto/<?php echo $this->session->userdata('foto');?>" alt="Profile" class="rounded-circle">
            <?php
              }
            ?>
              <!-- <h2><?php echo $this->session->userdata('id_Pegawai_Pabrik'); ?></h2>
              <h3><?php echo $dataperusahaan->Nama_pegawai_pabrik ?></h3> -->
            </div>
          </div>

        </div>

        <div class="col-xl-7">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">
                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

              </ul>

              <!-- Tab Content -->
              <div class="tab-content pt-2">
                <!-- Profile Overview -->
                <div class="tab-pane fade show active" id="profile-overview">
                  <h5 class="card-title">Profile Detail</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">ID Pegawai</div>
                    <div class="col-lg-9 col-md-8"><?php echo $this->session->userdata('id_Pegawai_Pabrik'); ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nama</div>
                    <div class="col-lg-9 col-md-8"><?php echo $dataperusahaan->Nama_pegawai_pabrik ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                    <div class="col-lg-9 col-md-8"><?php echo $dataperusahaan->Alamat_pegawai_pabrik ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Jabatan</div>
                    <div class="col-lg-9 col-md-8"><?php echo $this->session->userdata('jabatan_pegawai_pabrik'); ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Divisi</div>
                    <div class="col-lg-9 col-md-8"><?php echo $dataperusahaan->Divisi_pegawai_pabrik ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Password</div>
                    <div class="col-lg-9 col-md-8"><?php echo $dataperusahaan->password ?></div>
                  </div>
                  <div class="text-center">
                      <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin Ingin Mengubah Password?')">Change Password</button>
                    </div>
                </div>
                <!-- End Overview -->

                <!-- Profile Edit -->
                <div class="tab-pane fade show" id="profile-edit">
                  <h5 class="card-title">Profile Detail</h5>

                  <div class="row mb-3">
                      <label for="Nama" class="col-md-4 col-lg-3 col-form-label">Nama</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="Nama" type="text" class="form-control" id="Nama_pegawai_pabrik" value="<?php echo $dataperusahaan->Nama_pegawai_pabrik ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="Alamat" class="form-control" id="Alamat_pegawai_pabrik" style="height: 100px"><?php echo $dataperusahaan->Alamat_pegawai_pabrik ?></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">jabatan pegawai pabrik</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="No_Telepon" type="text" class="form-control" id="jabatan_pegawai_pabrik" value="<?php echo $dataperusahaan->jabatan_pegawai_pabrik ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Divisi pegawai pabrik</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="Divisi" type="text" class="form-control" id="Divisi_pegawai_pabrik" value="<?php echo $dataperusahaan->Divisi_pegawai_pabrik ?>">
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin Ingin Mengubah Password?')">Change Password</button>
                    </div>
                </div>
                <!-- End Edit -->
              </div>
              <!-- End Bordered Tabs -->
            </div>
          </div>
          <br>
        </div>
      </div>
    </section>
    </div>
  </main>
  <!-- End #main -->

  <!-- Start Footer Section -->
  <footer class="footer-section">
			<div class="container relative">
				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Kelompok Bread</a></p>
						</div>
					</div>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</body>


</html>