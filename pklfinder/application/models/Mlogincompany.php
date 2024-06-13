<?php
    class Mlogincompany extends CI_Model
    {
        function proseslogincompany()
        {
            $Username=$this->input->post('Username');
            $Password=$this->input->post('Password');

            $sql="select * from tbperusahaan where Email='".$Username."'";
            $sql.="and Password='".$Password."'";
            $query=$this->db->query($sql);
            if($query->num_rows()>0)
            {
            //session
				$data=$query->row();
				$array=array(
					'Id_Perusahaan'=>$data->Id_Perusahaan,
                    'Email'=>$data->Email,
					'Nama_Perusahaan'=>$data->Nama_Perusahaan,
					'Password'=>$data->Password,
                    'Alamat'=>$data->Alamat,
					'Bidang_Industri'=>$data->Bidang_Industri,
                    'No_Telepon'=>$data->No_Telepon,
					'foto1'=>$data->foto1,
                    'foto2'=>$data->foto2,
                    'foto3'=>$data->foto3,
				);	
				$this->session->set_userdata($array);
                echo "<script>alert('Login Berhasil');</script>";	
				redirect('ccompany/dashboard','refresh');
			}
			else
			{
                echo "<script>alert('Login Gagal');</script>";
				redirect('cdaftarcompany/logincompany','refresh');	
			}
        }
    }
?>