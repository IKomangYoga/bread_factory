<?=$header?>
<body>

<?=$navbarcompany?>

<?=$sidebarinbox?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Inbox</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url('ccompany/inbox') ?>">Inbox</a></li>
          <li class="breadcrumb-item active">Mahasiswa</li>
        </ol>
      </nav>
    </div>
    <section>
              <div class="card">
                <div class="container-fluid mt-4">
                      <div class="card-body">
                        <center><img src="https://i.pinimg.com/originals/db/51/31/db513104ffdf64566a19d52c88b85a03.jpg"></center>
                      </div>
                      <div class="d-grid gap-2">
                        <button class="btn" style="background-color: #012970; color: white;" type="submit">Accept</button>
                        <button class="btn btn-outline-danger" type="reset">Decline</button>
                      </div>
                </div>
              </div><!-- End Slides with indicators -->
    </section>

    </div>

    

  </main><!-- End #main -->

  <?=$footer?>

</body>

</html>