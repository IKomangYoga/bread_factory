<?php
    class Mlogin extends CI_Model
    {
        function proseslogin()
        {
            $Username=$this->input->post('Username');
            $Password=$this->input->post('Password');

            $sql="select * from pegawai_outlet where id_Pegawai_Outlet ='".$Username."'";
            $sql.="and password='".$Password."'";
            $query=$this->db->query($sql);
            if($query->num_rows()>0)
            {
            //session
				$data=$query->row();
				$array=array(
					'id_Pegawai_Outlet'=>$data->id_Pegawai_Outlet,
                    'Alamat_pegawai_outlet'=>$data->Alamat_pegawai_outlet,
					'Nama_pegawai_outlet'=>$data->Nama_pegawai_outlet,
					'jabatan_pegawa_outlet'=>$data->jabatan_pegawa_outlet,
                    'Divisi_pegawai_outlet'=>$data->Divisi_pegawai_outlet,
					'password'=>$data->password
				);	
				
                echo "<script>alert('Login Berhasil');</script>";	
				redirect('cadmin/dashboard','refresh');
			}
			else
			{
                echo "<script>alert('Login Gagal');</script>";
				redirect('ctampil/login','refresh');	
			}
        }
    }
?>