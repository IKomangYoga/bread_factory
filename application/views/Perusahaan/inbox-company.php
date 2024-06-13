<?=$header?>
<body>

<?=$navbarcompany?>

<?=$sidebarinbox?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Inbox</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url('cperusahaan/dashboard') ?>">Home</a></li>
          <li class="breadcrumb-item active">Inbox</li>
        </ol>
      </nav>
    </div>

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

    

  </main><!-- End #main -->

  <?=$footer?>

</body>

</html>