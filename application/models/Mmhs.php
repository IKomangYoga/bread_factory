<?php
    class Mmhs extends CI_Model
    {
        public function __construct()
	    {
			parent::__construct();
			$this->load->model('mvalidasimhs');
			$this->mvalidasimhs->validasi();
	    }


		function hapusfoto(){
			$id = $this->session->userdata('id_Pegawai_Outlet ');
			$data = array(
				'foto' => '' // or NULL for an empty string
			);

			$this->session->set_userdata('foto', '');
			$this->db->where('id_Pegawai_Outlet ', $id);
   			$this->db->update('pegawai_outlet', $data);
			redirect('Cmhs/profile','refresh');
		}

		function simpanfoto()
		{
			$id = $this->session->userdata('id_Pegawai_Outlet ');
			$foto = $_FILES['foto'];
		
			if ($foto == '') {} else {
				$config['upload_path'] = './assets/foto';
				$config['allowed_types'] = 'jpeg|jpg';
				$config['max_size'] = 1024;
		
				$this->load->library('upload', $config);
		
				if (!$this->upload->do_upload('foto')) {
					echo "<script>alert('Upload Gagal, Silahkan Coba Lagi');</script>";
					redirect('cmhs/profile','refresh');
				} else {
					$foto = $this->upload->data('file_name');
				}
			}
			
			$data = array(
				'foto' => $foto
			);

			$this->session->set_userdata('foto', $foto);
			$this->db->where('id_Pegawai_Outlet ', $id);
			$this->db->update('pegawai_outlet', $data);
			redirect('Cmhs/profile','refresh');
		}


        function simpanmhs()
		{
			
			$data=$_POST;
			$id_Pegawai_Outlet=$data['id_Pegawai_Outlet'];
			if($id_Pegawai_Outlet =="")
			{
				//simpan
				$this->db->insert('pegawai_outlet',$data);
				$this->session->set_flashdata('pesan','Data sudah disimpan...');
				redirect('Cmhs/profile','refresh');	
			}
			else
			{
				//edit	
				$update=array(
					'id_Pegawai_Outlet '=>$id_Pegawai_Outlet 
				);
				$this->db->where($update);
				$this->db->update('pegawai_outlet',$data);
				$sql="select * from pegawai_outlet where id_Pegawai_Outlet='".$id_Pegawai_Outlet."'";
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
				$this->session->set_userdata($array);
				$this->session->set_flashdata('pesan','Data sudah diedit...');
				redirect('Cmhs/profile','refresh');	
			}
        }}

		function proseseditpassword()
		{
			$data=$_POST;
			$id_Pegawai_Outlet =$data['id_Pegawai_Outlet '];

			$current_password = $data["current_password"];
			$new_password = $data["new_password"];
			$confirm_password = $data["confirm_password"];

			$query = $this->db->get_where('pegawai_outlet',['id_Pegawai_Outlet '=>$id_Pegawai_Outlet])->row_array();

			if($current_password == $query['Password']){
				// Check if the new password and confirm password match
				if ($new_password == $confirm_password) {
					$update=array(
						'id_Pegawai_Outlet '=>$id_Pegawai_Outlet 
					);
					$this->db->where($update);
					$this->db->update('pegawai_outlet',['Password'=>$new_password]);
					echo "<script>alert('Password Berhasil Diubah, Mohon Login Kembali');</script>";
					
					$this->session->sess_destroy();
					redirect('','refresh');
				} else {
					echo "<script>alert('Password Baru dan Password Konfirmasi Tidak Sesuai');</script>";
					redirect('cmhs/profile','refresh');
				}
			} else {
				echo "<script>alert('Password Salah');</script>";
				redirect('cmhs/profile','refresh');
			}
				
		}

		function getmahasiswa($id_Pegawai_Outlet )
		{
			return $this->db->get_where('pegawai_outlet',['id_Pegawai_Outlet '=>$id_Pegawai_Outlet])->row();
		}

		function getperusahaan($Id_Perusahaan)
		{
			return $this->db->get_where('pegawai_pabrik',['Id_Perusahaan'=>$Id_Perusahaan])->row();
		}
		
        function tampildata()
		{
			$sql="select * from pegawai_pabrik";
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

		
		
		function tampildatastatus()
		{
			$sql="select * from status";
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
		
        function simpandatastatus()
		{
			$Nama_pegawai_outlet=$this->input->post('Nama_pegawai_outlet');
            $PemilikStatus=$this->input->post('PemilikStatus');
            $Judul=$this->input->post('Judul');
            $Tanggal_Status=$this->input->post('Tanggal_Status');
            $Deskripsi=$this->input->post('Deskripsi');
			$foto = $_FILES['foto'];
			if ($foto == '') {} else {
				$config['upload_path'] = './assets/fotostatus';
				$config['allowed_types'] = 'jpeg|jpg|png';
				$config['max_size'] = 1024;
				
				$this->load->library('upload', $config);
				
				if (!$this->upload->do_upload('foto')) {
					echo "<script>alert('Upload Gagal, Silahkan Coba Lagi');</script>";
					redirect('cmhs/status','refresh');
				} else {
					$foto = $this->upload->data('file_name');
				}
			}
			
            $data=array(
				'Nama_pegawai_outlet'=>$Nama_pegawai_outlet,
                'PemilikStatus'=>$PemilikStatus,
                'Judul'=>$Judul,
                'Tanggal_Status'=>$Tanggal_Status,
                'Deskripsi'=>$Deskripsi,
				'foto'=>$foto,
			);
			
			$this->db->insert('status',$data);
			echo "<script>alert('Status Berhasil Diupload');</script>";
			redirect('Cmhs/status','refresh');
		}

		// Manggil database roti
		public function get_products()
		{
	
			$sql="select * from roti";
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
				$hasil="Data Kosong";	
			}
			return $hasil;	
	
		}

		public function get_data_roti($id_roti)
		{
			$this->db->where('id_roti', $id_roti);
			$query = $this->db->get('roti');
			return $query->result();
		}
    }
	?>