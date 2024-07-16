<?=$header?>

<!-- Start form login -->
<div class="bg">
      <div class="container-fluid">
        <div class="row h-100">
          <div class="col-6 d-flex align-items-center justify-content-start" >
            <div class=" mx-5 ">
              <h1 >Selamat Datang</h1>
              <h5 >Silahkan login terlebih dahulu</h5>
            </div>
          </div>
          <div class="h-100 col-6 d-flex justify-content-center align-items-center pt-5">
            <div class="col-lg-8 ">
              <h2 class="text-center py-3 d-flex align-items-center justify-content-center">Masukan Data</h2>
              <form name="formlogin" method="post" action="<?php echo base_url('cdaftarcompany/proseslogincompany')?>">
              
              
                <div class="mx-3 my-4">
                  <label for="username" class="form-label">ID</label>
                  <input type="text" class="form-control" id="username" name="Username" placeholder="Masukan ID Pengguna" required>                                                                                                                                                                          
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="Password" placeholder="Masukkan Password" required>
                   <!--letak dropdown  -->
                    <label for="role" class="form-label">Login sebagai</label>
                    <select class="form-control mb-2" name="role" id="role" required onchange="if (this.value === 'Outlet') window.location.href = '<?php echo base_url('cdaftarmhs/login');?>';">
                      <option value="" disabled selected>Masuk sebagai</option>
                      <option value="Outlet">Outlet</option>
                      <option>Perusahaan Bread Factory</option>
                    </select>
                  <!-- bagian button -->
                  <div class="pt-3 align-items-center justify-content-between align d-flex">
                    <a href="<?php echo base_url('Cdaftarcompany/registercompany');?>">Klik Untuk Daftar</a>
                    <input type="submit" value="Masuk " class="btn btn-success" id="login">
                  </div>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- End login form -->

  

  <?=$footer?>

</body>

</html>