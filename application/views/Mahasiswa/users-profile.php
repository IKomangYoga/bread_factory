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
				<a class="navbar-brand" href="index.html">Bread Factory<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li >
							<a class="nav-link" href="<?php echo base_url('cmhs/dashboard'); ?>">Home</a>
						</li>
						<li><a class="nav-link" href="<?php echo base_url('cmhs/product'); ?>">Product</a></li>
						<li><a class="nav-link" href="<?php echo base_url('cmhs/pesanan'); ?>">Pesananmu</a></li>
						<li><a class="nav-link" href="about.html">About us</a></li>
						<li><a class="nav-link" href="services.html">Services</a></li>
						<li><a class="nav-link" href="contact.html">Contact us</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="<?php echo base_url('cmhs/profile'); ?>"><img src="<?=base_url()?>assets/asset/images/user.svg"></a></li>
						<li><a class="nav-link" href="<?php echo base_url('cmhs/keranjang'); ?>"><img src="<?=base_url()?>assets/asset/images/cart.svg"></a></li>
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
              <!-- <h2><?php echo $this->session->userdata('id_Pegawai_Outlet'); ?></h2>
              <h3><?php echo $datamhs->Nama_pegawai_outlet ?></h3> -->
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

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
      
                  <h5 class="card-title">Profile Detail</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">ID Pegawai</div>
                    <div class="col-lg-9 col-md-8"><?php echo $this->session->userdata('id_Pegawai_Outlet'); ?></div>
                    
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nama</div>
                    <div class="col-lg-9 col-md-8"><?php echo $datamhs->Nama_pegawai_outlet ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                    <div class="col-lg-9 col-md-8"><?php echo $datamhs->Alamat_pegawai_outlet ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Jabatan</div>
                    <div class="col-lg-9 col-md-8"><?php echo $this->session->userdata('jabatan_pegawa_outlet'); ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Divisi</div>
                    <div class="col-lg-9 col-md-8"><?php echo $datamhs->Divisi_pegawai_outlet ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Password</div>
                    <div class="col-lg-9 col-md-8"><?php echo $datamhs->password ?></div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

            
                  <!-- Profile Edit Form -->
                  <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <?php
                          if(empty($this->session->userdata('foto')))
                          {
                          ?>
                            <img src="<?=base_url()?>/assets/foto/empty.jpeg" alt="Profile">
                          <?php  
                            } else{
                              ?>
                             <img src="<?=base_url()?>/assets/foto/<?php echo $this->session->userdata('foto');?>" alt="Profile">
                          <?php
                            }
                          ?>
                        
                        <div class="pt-2">
                          <!-- <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a> -->
                          <!-- Basic Modal -->
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                      <i class="bi bi-upload"></i>
                          </button>
                          <div class="modal fade" id="basicModal" tabindex="-1">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Upload Photo</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  
                                  <?php echo form_open_multipart('cmhs/simpanfotoprofile'); ?>
                                  <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Photo Upload</label> <br/>
                                    <div class="col-sm-10">
                                      <input class="form-control" type="file" name="foto" id="formFile">
                                    </div>
                                  </div>
                                  

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                  <?php echo form_close(); ?>
                                </div>
                              </div>
                            </div>
                          </div><!-- End Basic Modal-->
                          <a href="<?php echo base_url('cmhs/hapusfoto') ?>" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Foto?')"></i></a>
                        </div>
                      </div>
                  </div>
                  

                  <form method="post"action ="<?php echo base_url('Cmhs/editdata')?>" >
                  <input type="hidden" name="id_Pegawai_Outlet"value="<?php echo $datamhs->id_Pegawai_Outlet ?>">
                  
                    <div class="row mb-3">
                      <label for="Nama" class="col-md-4 col-lg-3 col-form-label">Nama</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="Nama" type="text" class="form-control" id="Nama_pegawai_outlet" value="<?php echo $datamhs->Nama_pegawai_outlet ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="Alamat" class="form-control" id="Alamat_pegawai_outlet" style="height: 100px"><?php echo $datamhs->Alamat_pegawai_outlet ?></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">jabatan pegawai outlet</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="No_Telepon" type="text" class="form-control" id="jabatan_pegawa_outlet" value="<?php echo $datamhs->jabatan_pegawa_outlet ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Divisi pegawai outlet</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="Divisi" type="text" class="form-control" id="Divisi_pegawai_outlet" value="<?php echo $datamhs->Divisi_pegawai_outlet ?>">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin Ingin Mengubah Data Diri?')">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>
                
                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form method="post"action ="<?php echo base_url('Cmhs/editpassword')?>" >
                  <input type="hidden" name="id_Pegawai_Outlet"value="<?php echo $datamhs->id_Pegawai_Outlet ?>">

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="current_password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="new_password" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="confirm_password" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin Ingin Mengubah Password?')">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>
<br>
        </div>
      </div>
    </section>
    </div>
  </main><!-- End #main -->

  <?=$footer?>

</body>

</html>