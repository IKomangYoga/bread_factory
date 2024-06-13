<?php
	class MJurusan extends CI_Model
	{
		
		function simpanjurusan()
		{
			$data=$_POST;
			$this->db->insert('tbjurusan',$data);
			$this->session->set_flashdata('pesan','Data Berhasil Disimpan');
			redirect('cjurusan/tampil','refresh');
		}	
		
		function tampildata()
		{
			$sql="select * from tbjurusan";
			$query=$this->db->query($sql);
			if ($query->num_rows()>0)
			{
				foreach ($query->result() as $row)
				{
					$hasil[]=$row;
				}	
			}
			else
			{
				$hasil="";	
			}
			return $hasil;	
		}

		function hapusdata($KodeProdi)
		{
			$sql="delete from tbprodi where KodeJurusan='".$KodeJurusan."'";
			$this->db->query($sql);
			redirect('cjurusan/tampil','refresh');	
		}
	}
?>