<?=$header?>
<body>

<?=$navbarcompany?>

<?=$sidebarcompany?>

  <main id="main" class="main">

<div class="container-fluid md-5">
    <div class="pagetitle">
      <h1><?php echo $this->session->userdata('Nama_Perusahaan'); ?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<!-- Default Tabs -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Preview</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Edit Data</button>
                </li>
              </ul>
              <div class="tab-content pt-2" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <section class="section dashboard">
        <div class="card">
            <div class="card-body mt-3">

              <!-- Slides with indicators -->
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                  <?php
                          if(empty($this->session->userdata('foto1')))
                          {
                          ?>
                            <img src="<?=base_url()?>/assets/fotocompany/no-image.jpg" height="500" width="100%" alt="Profile">
                          <?php  
                            } else{
                              ?>
                             <img src="<?=base_url()?>/assets/fotocompany/<?php echo $this->session->userdata('foto1');?>" height="683" width="100%" alt="Profile">
                          <?php
                            }
                  ?>
                  </div>
                  <div class="carousel-item">
                  <?php
                          if(empty($this->session->userdata('foto2')))
                          {
                          ?>
                            <img src="<?=base_url()?>/assets/fotocompany/no-image.jpg" height="500" width="100%" alt="Profile">
                          <?php  
                            } else{
                              ?>
                             <img src="<?=base_url()?>/assets/fotocompany/<?php echo $this->session->userdata('foto2');?>" height="683" width="100%" alt="Profile">
                          <?php
                            }
                          ?>
                  </div>
                  <div class="carousel-item">
                  <?php
                          if(empty($this->session->userdata('foto3')))
                          {
                          ?>
                            <img src="<?=base_url()?>/assets/fotocompany/no-image.jpg" height="500" width="100%" alt="Profile">
                          <?php  
                            } else{
                              ?>
                             <img src="<?=base_url()?>/assets/fotocompany/<?php echo $this->session->userdata('foto3');?>" height="683" width="100%" alt="Profile">
                          <?php
                            }
                          ?>
                  </div>
              </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>

              </div><!-- End Slides with indicators -->
                  
              </section>
              
              <section>
              <div class="card">
                <div class="container-fluid mt-3">
                      <div class="card-body">
                        <div class="card-title">             
                          <center><h2><?php echo $this->session->userdata('Nama_Perusahaan'); ?></h2></center>
                        </div>
                        <center><?php echo $dataperusahaan->Deskripsi ?></center>
                      </div>
                </div>
              </div><!-- End Slides with indicators -->
              </section>

              <section class="section contact">

              <div class="row gy-4">

                <div class="">

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="info-box card">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Address</h3>
                        <p><?php echo $dataperusahaan->Alamat ?></p>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="info-box card">
                        <i class="bi bi-telephone"></i>
                        <h3>Call Us</h3>
                        <p><?php echo $this->session->userdata('No_Telepon'); ?></p>
                      </div>
                    </div>
                    <div class="">
                      <center><div class="info-box card">
                        <i class="bi bi-envelope"></i>
                        <h3>Email Us</h3>
                        <p><?php echo $dataperusahaan->Email ?></p>
                        </center>
                      </div>
                    </div>
                  </div>

                </div>
              </section>
            </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                   <!-- Profile Edit Form -->
                   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                      <i>Upload Your Company Pictures</i>
                          </button>
                          <div class="modal fade" id="basicModal" tabindex="-1">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">Upload Photo</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  
                                  <?php echo form_open_multipart('ccompany/simpanfotocompany'); ?>
                                  <div class="row mb-3">
                                    <div class="col-sm-10">
                                      <input class="form-control" type="file" name="foto1" id="formFile">
                                    </div>
                                  </div>

                                  <div class="row mb-3">                                  
                                    <div class="col-sm-10">
                                      <input class="form-control" type="file" name="foto2" id="formFile">
                                    </div>
                                  </div>

                                  <div class="row mb-3">                                  
                                    <div class="col-sm-10">
                                      <input class="form-control" type="file" name="foto3" id="formFile">
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
                          </div>
                   
                   <form method="post" action ="<?php echo base_url('Ccompany/editdata')?>">
                   <input type="hidden" name="Id_Perusahaan"value="<?php echo $dataperusahaan->Id_Perusahaan ?>">
                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" value="<?php echo $dataperusahaan->Email ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">No. Telepon</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="No_Telepon" type="text" class="form-control" id="No" value="<?php echo $dataperusahaan->No_Telepon ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="Alamat" class="form-control" id="about" style="height: 100px"><?php echo $dataperusahaan->Alamat ?></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Deskripsi</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="Deskripsi" class="form-control" id="about" style="height: 100px"><?php echo $dataperusahaan->Deskripsi ?></textarea>
                      </div>
                    </div>
                
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->
              </div><!-- End Default Tabs -->
    
</div>
    </main><!-- End #main -->

  <?=$footer?>

</body>

</html>