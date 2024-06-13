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
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">Home</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
  <div class="search-bar">
  <form class="search-form d-flex align-items-center" method="GET" action="<?= base_url('cmhs/dashboard') ?>">
    <input type="text" name="keyword" placeholder="Search" title="Enter search keyword">
    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
  </form>
</div>
<br/>
    
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