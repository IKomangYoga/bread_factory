<?php
    class Mloginmhs extends CI_Model
    {
        function prosesloginmhs()
        {
            $Username=$this->input->post('Username');
            $Password=$this->input->post('Password');

            $sql="select * from tbmhs where Nim='".$Username."'";
            $sql.="and Password='".$Password."'";
            $query=$this->db->query($sql);
            if($query->num_rows()>0)
            {
            //session
				$data=$query->row();
				$array=array(
					'id_mhs'=>$data->id_mhs,
                    'Nim'=>$data->Nim,
					'Nama'=>$data->Nama,
					'Password'=>$data->Password,
                    'Jurusan'=>$data->Jurusan,
					'Prodi'=>$data->Prodi,
                    'Alamat'=>$data->Alamat,
					'Email'=>$data->Email,
                    'No_Telepon'=>$data->No_Telepon,
					'Jenis_Kelamin'=>$data->Jenis_Kelamin,
                    'Cv'=>$data->Cv,
					'Bukti_Ktm'=>$data->Bukti_Ktm,
                    'foto'=>$data->foto
				);	
				$this->session->set_userdata($array);
                echo "<script>alert('Login Berhasil');</script>";	
				redirect('cmhs/dashboard','refresh');
			}
			else
			{
                echo "<script>alert('Login Gagal');</script>";
				redirect('cdaftarmhs/login','refresh');	
			}
        }
    }
?>