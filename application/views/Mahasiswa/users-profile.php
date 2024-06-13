<?=$header?>
<body>

<?=$navbar?>

<?=$sidebarprofile?>
  <main id="main" class="main">
<div class="container">
    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url('cmhs/dashboard') ?>">Home</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

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
              <h2><?php echo $this->session->userdata('Nama'); ?></h2>
              <h3><?php echo $datamhs->Prodi ?></h3>
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
      
                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">NIM</div>
                    <div class="col-lg-9 col-md-8"><?php echo $this->session->userdata('Nim'); ?></div>
                    <!-- <input type="text" class="col-lg-9 col-md-8" id="Email_Perusahaan" name="Nim" placeholder="<?php echo $this->session->userdata('Nim'); ?>"> -->
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $datamhs->Nama ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                    <div class="col-lg-9 col-md-8"><?php echo $this->session->userdata('Jenis_Kelamin'); ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Jurusan</div>
                    <div class="col-lg-9 col-md-8"><?php echo $this->session->userdata('Jurusan'); ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Program Studi</div>
                    <div class="col-lg-9 col-md-8"><?php echo $this->session->userdata('Prodi'); ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $datamhs->Email ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">No. Telepon</div>
                    <div class="col-lg-9 col-md-8"><?php echo $datamhs->No_Telepon ?></div>
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
                  <input type="hidden" name="id_mhs"value="<?php echo $datamhs->id_mhs ?>">
                  
                    <div class="row mb-3">
                      <label for="Nama" class="col-md-4 col-lg-3 col-form-label">Nama</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="Nama" type="text" class="form-control" id="Nama" value="<?php echo $datamhs->Nama ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="Alamat" class="form-control" id="Alamat" style="height: 100px"><?php echo $datamhs->Alamat ?></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">No. Telepon</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="No_Telepon" type="text" class="form-control" id="No_Telepon" value="<?php echo $datamhs->No_Telepon ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="Email" type="email" class="form-control" id="Email" value="<?php echo $datamhs->Email ?>">
                      </div>
                    </div>

                    <!-- <div class="row mb-3">
                      <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                      </div>
                    </div> -->

                    <!-- <div class="row mb-3">
                      <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                      </div>
                    </div> -->

                    <!-- <div class="row mb-3">
                      <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                      </div>
                    </div> -->

                    <!-- <div class="row mb-3">
                      <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                      </div>
                    </div> -->

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin Ingin Mengubah Data Diri?')">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>
                
                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form method="post"action ="<?php echo base_url('Cmhs/editpassword')?>" >
                  <input type="hidden" name="id_mhs"value="<?php echo $datamhs->id_mhs ?>">

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

        </div>
      </div>
    </section>
    </div>
  </main><!-- End #main -->

  <?=$footer?>

</body>

</html>