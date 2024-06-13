
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
      <div class="container">
            <div class="row">
            <?php
                //  for ($i = 0; $i < 1; $i++) {
                    ?>
                    <!-- <div class='col-3 mb-4'>
                        <div class='card'>
                            <div class='card-header'>
                                <img class='card-img'
                                     src='https://th.bing.com/th/id/OIP.1_ShOumVZsgryeO2aPiZ8gAAAA?pid=ImgDet&rs=1'>
                            </div>
                            <div class='card-body'>
                              <div class='card-title'><?php echo $data->Nama_Perusahaan ?></div>
                                <div class='card-text'>
                                    PT sejahtera adalah pt yang berkerja dalam bidang kesejahteraan rakyat
                                </div>
                              </div>
                                <table class='table'>
                                    <tbody>
                                        <tr>
                                            <td>Website</td>
                                            <td>https://example.com</td>
                                        </tr>
                                        <tr>
                                            <td>Kategori</td>
                                            <td><?php echo $data->Bidang_Industri ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                    </div> -->

          
            <div class="card">        
                <div class="row">
                    <!-- <div class="col-lg-6"> -->
                    <div class="card-body">
                        <div class="mt-3">
                        <table>
                        <td>
                        <a href="<?php echo base_url('ccompany/calonmhs') ?>" class="card-title"><?php echo $data->Nama ?></a> <br/>
                        <b>Program Studi:</b> <p><?php echo $data->Prodi ?></p>
                        <b>Jurusan:</b> <p><?php echo $data->Jurusan ?></p>
                        </td> 
                        </table>
                        </div>
                    </div>
                </div>

            <!-- accordian -->
              <!-- <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <?php echo $data->Nama_Perusahaan ?>
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                     <p><?php echo $data->Deskripsi ?></p>
                     <b>Bidang Industri:</b> <p><?php echo $data->Bidang_Industri ?></p>
                    </div>
                  </div>
                </div>
                </div>
              </div> -->
                    <?php
                //    }
                ?>
            </div>
      
    <?php
	 		$no++;
	 		endforeach;
 
		}
	  ?>
