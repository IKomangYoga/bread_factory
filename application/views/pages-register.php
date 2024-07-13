<?=$header?>



<body>

  <main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-7">
              <div class="card">
                  <div class="card-header"  style="background-color: #012970;"><center><b> <font size="5" color="white">Registration Outlet</center></font></b></div>
                  <div class="card-body">
                      <?php echo form_open_multipart('cdaftarmhs/simpandaftarmhs'); ?>
                          <div class="row">
                            
                              <div class="col-md-6">
                                  <div class="mb-3">
                                      <label for="username" class="form-label">Masukan id</label>
                                      <input type="text" class="form-control" id="id_pegawai_outlet" name="id_pegawai_outlet" placeholder="Masukkan ID Anda" required>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="mb-3">
                                      <label for="username" class="form-label">Masukan Alamat</label>
                                      <input type="text" class="form-control" id="no_telepon" name="no_telepon" placeholder="Masukkan No Telepon Anda" required>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="mb-3">
                                      <label for="username" class="form-label">Masukan Nama</label>
                                      <input type="text" class="form-control" id="nama_pegawai_outlet" name="nama_pegawai_outlet" placeholder="Masukkan Nama" required>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="mb-3">
                                  <label for="username" class="form-label">Masukan Jabatan</label> <br/>
                                  <select class="form-select" name="jabatan_pegawa_outlet">
                                      <option value="">Pilih Jabatan</option>
                                      <option value="outlet">Pegawai Outlet</option>
                                      <option value="ceo">CEO</option>                                    
                                  </select>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="mb-3">
                                  <label for="username" class="form-label">Masukan Divisi</label> <br/>
                                  <select class="form-select" name="Divisi_pegawai_outlet">
                                      <option value="">Pilih Divisi</option>
                                      <option value="penjualan">Penjualan</option>
                                      <option value="keuangan">Keuangan</option>                                    
                                  </select>
                                  </div>
                              </div>
                              
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="mb-3">
                                  <label for="username" class="form-label">Password</label> <br/>
                                  <input type="password" class="form-control" name="password" placeholder="Masukkan Password Anda" required>
                                  </div>
                              </div>
                              
                          </div>
                          
                          <!-- <div class="row">
                                  <div class="mb-3">
                                  <label for="password" class="form-label" >Upload Foto Profile</label> <br/>
                                  <input type="file" class="form-control" id="nama" name="Cv" >
                                  </div>
                              </div>
                          <div class="d-grid gap-2"> -->

                          <!-- Button -->
                          <div class="pt-3 align-items-center justify-content-between align d-flex">
                            <a href="<?php echo base_url('cdaftarmhs/login');?>">Sudah punya akun?</a>             
                            <input type="submit" value="Masuk " class="btn btn-success" id="login">
                          </div>
                          <!-- End button -->
                      <?php echo form_close(); ?>
                  </div>
              </div>
          </div>
      </div>
  </div>
      
    </section>
    </div>
  
  <?=$footer?>
</body>

</html>