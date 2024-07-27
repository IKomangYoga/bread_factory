<?php
	class Mvalidasicompany extends CI_Model
	{
		function validasi()
		{
			if ($this->session->userdata('id_Pegawai_Pabrik')=='')
			{
				echo "<script>alert ('Anda tidak dapat mengakses halaman ini..!');</script>";
				redirect('','refresh');
			}
		}
		
	}
?>