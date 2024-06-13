<?php
    class Mlogincompany extends CI_Model
    {
        function proseslogincompany()
        {
            $Username=$this->input->post('Username');
            $Password=$this->input->post('Password');

            $sql="select * from pegawai_pabrik where id_Pegawai_Pabrik ='".$Username."'";
            $sql.="and password='".$Password."'";
            $query=$this->db->query($sql);
            if($query->num_rows()>0)
            {
            //session
				$data=$query->row();
				$array=array(
					'id_Pegawai_Pabrik '=>$data->id_Pegawai_Pabrik,
                    'jabatan_pegawai_pabrik'=>$data->jabatan_pegawai_pabrik,
					'Divisi_pegawai_pabrik'=>$data->Divisi_pegawai_pabrik,
					'Nama_pegawai_pabrik'=>$data->Nama_pegawai_pabrik,
                    'Alamat_pegawai_pabrik'=>$data->Alamat_pegawai_pabrik,
					'No_hp_pegawai_pabrik'=>$data->No_hp_pegawai_pabrik,
                    'password'=>$data->password
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