<?php
	class Mvalidasicompany extends CI_Model
	{
		function validasi()
		{
			if ($this->session->userdata('Id_Perusahaan')=='')
			{
				echo "<script>alert ('Anda tidak dapat mengakses halaman ini..!');</script>";
				redirect('','refresh');
			}
		}
		
	}
?>