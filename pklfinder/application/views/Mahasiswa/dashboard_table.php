
    <?php
      if(empty($hasil))
      {
        echo "Data kosong";
      }
      else
      {
        $no=1;
        foreach ($hasil as $data):
          if (!isset($_GET['keyword'])||empty($_GET['keyword']) || strpos(strtolower($data->Nama_Perusahaan), strtolower($_GET['keyword']))!==false){
    ?>
      <div class="container">
            <div class="row">
          
            <div class="card">        
                <div class="row">
                    <div class="card-body">
                        <div class="mt-3">
                        <table>
                        <td><img src="<?=base_url()?>/assets/fotocompany/<?php echo $data->foto1 ?>" height="200" width="400"></td>
                        <td></td>
                        <td>
                        <a href="<?php echo base_url('cmhs/perusahaan?id=' . $data->Id_Perusahaan) ?>" class="card-title"><?php echo $data->Nama_Perusahaan ?></a>
                        <p><?php echo $data->Deskripsi ?></p>
                        <b>Bidang Industri:</b> <p><?php echo $data->Bidang_Industri ?></p>
                        </td> 
                        </table>
                        </div>
                    </div>
                </div>
            </div>

    <?php
    $no++;
  }
  endforeach;
 
		}
	  ?>
