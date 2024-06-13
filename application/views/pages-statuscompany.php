<?=$header?>
<body>

<?=$navbarcompany?>

<?=$sidebarstatuscompany?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Status</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Status</a></li>
          <li class="breadcrumb-item active">Status</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-home" type="button" role="tab" aria-controls="home" aria-selected="true">Status</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Upload Status</button>
                </li>
              </ul>
              <div class="tab-content pt-2" id="borderedTabContent">
                <div class="tab-pane fade show active" id="bordered-home" role="tabpanel" aria-labelledby="home-tab">
                <?php
                if(empty($table))
                {
                echo "";  
                }
                else
                {
                echo $table;   
                }
                ?>
                </div>
                <div class="tab-pane fade" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">
                <?php echo form_open_multipart('ccompany/simpandatastatus'); ?>
                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Nama</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="Nama" class="form-control" id="Email" value="<?php echo $this->session->userdata('Nama_Perusahaan'); ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Pemilik Status</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="PemilikStatus" class="form-control" id="Email" value="Perusahaan">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Judul Status</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="Judul" class="form-control" id="about"></input>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Tanggal Status</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="date" name="Tanggal_Status" class="form-control" id="about"></input>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Deskripsi</label>
                      <div class="col-md-8 col-lg-9">
                      <textarea name="Deskripsi" class="form-control" id="Alamat" style="height: 100px"></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Foto</label>
                      <div class="col-md-8 col-lg-9">
                        <input type="file" class="form-control" id="nama" name="foto">
                      </div>
                    </div>
                <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                <?php echo form_close(); ?><!-- End Upload Form -->
                </div>
              </div><!-- End Bordered Tabs -->         
  </main><!-- End #main -->

  <?=$footer?>

</body>

</html>