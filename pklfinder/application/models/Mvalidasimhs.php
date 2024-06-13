<?php
	class Mvalidasimhs extends CI_Model
	{
		function validasi()
		{
			if ($this->session->userdata('id_mhs')=='')
			{
				echo "<script>alert ('Anda tidak dapat mengakses halaman ini..!');</script>";
				redirect('','refresh');
			}
		}
		
	}
?>