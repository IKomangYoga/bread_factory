<?=$header?>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"  style="background-color: #012970;"><center><b> <font size="5" color="white">Registration Perusahaan</center></font></b></div>
                <div class="card-body">
                          <form method="POST" action="<?php echo base_url('cdaftarcompany/simpandaftarcompany') ?>">
                                
                                <div class="mb-3">
                                    <label for="username" class="form-label">Nama Pegawai</label>
                                    <input type="text" class="form-control" id="Nama_pegawai_pabrik" name="Nama_pegawai_pabrik" placeholder="Masukkan Nama Perusahaan" required>
                                </div>
                                <div class="mb-3">
                                  <label for="password" class="form-label">Jabatan</label> <br/>
                                  <select name="jabatan_pegawai_pabrik" class="form-select">
                                      <option value="">Pilih Bidang Industri</option>
                                      <option value="ceo">CEO</option>
                                      <option value="pegawai_pabrik">Pegawai Pabrik</option>
                  
                                  </select>
                                </div>
                                <div class="mb-3">
                                  <label for="password" class="form-label">Divisi</label> <br/>
                                  <select name="Divisi_pegawai_pabrik" class="form-select">
                                      <option value="">Pilih Bidang Industri</option>
                                      <option value="keuangan">Keuangan</option>
                                      <option value="koki">Koki</option>
                                      <option value="delivery">Delivery</option>
                                      <option value="pegawai">Pegawai</option>
                                  </select>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="Alamat_pegawai_pabrik" name="Alamat_pegawai_pabrik" placeholder="Masukkan Alamat" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Nomor HP</label>
                                    <input type="text" class="form-control" id="No_hp_pegawai_pabrik" name="No_hp_pegawai_pabrik" placeholder="Masukkan Nomor HP" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
                                </div>
                                  
                                <!-- Button -->
                          <div class="pt-3 align-items-center justify-content-between align d-flex">
                            <a href="<?php echo base_url('Cdaftarcompany/logincompany');?>">Sudah punya akun?</a>             
                            <input type="submit" value="Masuk " class="btn btn-success" id="login">
                          </div>
                          <!-- End button -->
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