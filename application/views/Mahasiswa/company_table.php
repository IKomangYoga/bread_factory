
        <?php
      if(empty($hasil))
      {
        echo "Data kosong";
      }
      else
      {
        foreach ($hasil as $data):
          if ($_GET['id'] == $data->Id_Perusahaan){
    ?>

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
                          if(empty($data->foto1))
                          {
                          ?>
                            <img src="<?=base_url()?>/assets/fotocompany/404-not-found-error.jpeg" height="500" width="100%" alt="Profile">
                          <?php  
                            } else{
                              ?>
                             <img src="<?=base_url()?>/assets/fotocompany/<?php echo $data->foto1 ?>" height="683" width="100%" alt="Profile">
                          <?php
                            }
                  ?>
                  </div>
                  <div class="carousel-item">
                  <?php
                          if(empty($data->foto2))
                          {
                          ?>
                            <img src="<?=base_url()?>/assets/fotocompany/404-not-found-error.jpeg" height="500" width="100%" alt="Profile">
                          <?php  
                            } else{
                              ?>
                             <img src="<?=base_url()?>/assets/fotocompany/<?php echo $data->foto2 ?>" height="683" width="100%" alt="Profile">
                          <?php
                            }
                          ?>
                  </div>
                  <div class="carousel-item">
                  <?php
                          if(empty($data->foto3))
                          {
                          ?>
                            <img src="<?=base_url()?>/assets/fotocompany/404-not-found-error.jpeg" height="500" width="100%" alt="Profile">
                          <?php  
                            } else{
                              ?>
                             <img src="<?=base_url()?>/assets/fotocompany/<?php echo $data->foto3 ?>" height="683" width="100%" alt="Profile">
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
                          <center><h2><?php echo $data->Nama_Perusahaan ?></h2></center>
                        </div>
                        <center><?php echo $data->Deskripsi ?></center>
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
                        <p><?php echo $data->Alamat ?></p>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="info-box card">
                        <i class="bi bi-telephone"></i>
                        <h3>Call Us</h3>
                        <p><?php echo $data->No_Telepon ?></p>
                      </div>
                    </div>
                    <div class="">
                      <center><div class="info-box card">
                        <i class="bi bi-envelope"></i>
                        <h3>Email Us</h3>
                        <p><?php echo $data->Email ?></p>
                        </center>
                      </div>
                    </div>
                  </div>

                </div>
              </section>
            </div>
            <a class="btn" style="background-color: #012970; color: white;" href="<?=base_url('cmhs/kirim_cv?id='.$data->Id_Perusahaan)?>">Send CV</a>
</div>
    </main><!-- End #main -->

        <?php
          }     
	 		endforeach;
    }
	  ?>
