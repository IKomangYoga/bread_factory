<?=$header?>
<body>

<?=$navbar?>

<?=$sidebarcv?>

  <main id="main" class="main">

    <section>
        <!-- Default Tabs -->
        <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-justified" type="button" role="tab" aria-controls="home" aria-selected="true">CV</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-justified" type="button" role="tab" aria-controls="profile" aria-selected="false">KTM</button>
                </li>
              </ul>
              <div class="tab-content pt-2" id="myTabjustifiedContent">
                <div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="home-tab">
                    <div class="container">
                        <div class="row">
                            <div class="card">
                              <iframe src="data:application/pdf;base64,<?=base64_encode(file_get_contents(base_url('assets/foto/'.$this->session->userdata('Cv'))))?>" height="700"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="container">
                            <div class="row">
                                <!-- <div class="card"> -->
                                    <img src="<?=base_url()?>/assets/foto/<?php echo $this->session->userdata('Bukti_Ktm');?>" class="img-fluid img-thumbnail ">
                                </div>
                            </div>
                        </div>
                    </div>
              </div><!-- End Default Tabs -->
    </section>

  </main><!-- End #main -->

  <?=$footer?>

</body>

</html>