<div class="container mt-4">
    <div class="row">
        <?php
      if(empty($hasil))
      {
        echo "Data kosong";
      }
      else
      {
        $no=1;
        foreach ($hasil as $data):
    ?>
        <div class='col-3'>
            <div class='card'>
                <div class='card-header'>
                <div class="View">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#ExtralargeModal-<?=$data->id_Status?>">View</a></li>
                  </ul>
                </div>
              <div class="modal fade" id="ExtralargeModal-<?=$data->id_Status?>" tabindex="-1">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-body">
<section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Reports -->
            <div class="col-12">
              <div class="card">
              <img src="<?=base_url()?>/assets/fotostatus/<?php echo $data->foto ?>">
              </div>
            </div><!-- End Reports -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
            <div class="card-header">
            <?php echo $data->Nama ?> <span>| <?php echo $data->PemilikStatus ?></span>
                
            </div>
            <div class="card-body">
              <h5 class="card-title"><?php echo $data->Judul ?></h5>
              <?php echo $data->Deskripsi ?>
            </div>
            <div class="card-footer">
                <?php echo $data->Tanggal_Status ?>
            </div>
          </div><!-- End Card with header and footer -->  
        </div><!-- End Right side columns -->

      </div>
    </section>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
                    <img src="<?=base_url()?>/assets/fotostatus/<?php echo $data->foto ?>" width="100%">
                </div>
                <div class='row mx-auto'>
                    </tbody>
                </div>
            </div>
        </div>
        <?php
	 		$no++;
	 		endforeach;
    }
	  ?>
    </div>
</div>