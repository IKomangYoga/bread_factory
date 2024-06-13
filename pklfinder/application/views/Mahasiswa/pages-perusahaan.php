<?=$header?>
<body>

<?=$navbar?>

<?=$sidebar?>

  <main id="main" class="main">
<div class="container">
    <div class="pagetitle">
      <h1>Home</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
          <li class="breadcrumb-item active">Home</li>
        </ol>
      </nav>
  <main>
    </div><!-- End Page Title -->
              
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