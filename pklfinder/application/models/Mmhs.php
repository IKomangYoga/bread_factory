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
			$id = $this->session->userdata('id_mhs');
			$data = array(
				'foto' => '' // or NULL for an empty string
			);

			$this->session->set_userdata('foto', '');
			$this->db->where('id_mhs', $id);
   			$this->db->update('tbmhs', $data);
			redirect('Cmhs/profile','refresh');
		}

		function simpanfoto()
		{
			$id = $this->session->userdata('id_mhs');
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
			$this->db->where('id_mhs', $id);
			$this->db->update('tbmhs', $data);
			redirect('Cmhs/profile','refresh');
		}

        function simpanmhs()
		{
			
			$data=$_POST;
			$idmhs=$data['id_mhs'];
			if($idmhs=="")
			{
				//simpan
				$this->db->insert('tbmhs',$data);
				$this->session->set_flashdata('pesan','Data sudah disimpan...');
				redirect('Cmhs/profile','refresh');	
			}
			else
			{
				//edit	
				$update=array(
					'id_mhs'=>$idmhs
				);
				$this->db->where($update);
				$this->db->update('tbmhs',$data);
				$sql="select * from tbmhs where id_mhs='".$idmhs."'";
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
						'Bukti_Ktm'=>$data->Bukti_Ktm
					);	
				$this->session->set_userdata($array);
				$this->session->set_flashdata('pesan','Data sudah diedit...');
				redirect('Cmhs/profile','refresh');	
			}
        }}

		function proseseditpassword()
		{
			$data=$_POST;
			$idmhs=$data['id_mhs'];

			$current_password = $data["current_password"];
			$new_password = $data["new_password"];
			$confirm_password = $data["confirm_password"];

			$query = $this->db->get_where('tbmhs',['id_mhs'=>$idmhs])->row_array();

			if($current_password == $query['Password']){
				// Check if the new password and confirm password match
				if ($new_password == $confirm_password) {
					$update=array(
						'id_mhs'=>$idmhs
					);
					$this->db->where($update);
					$this->db->update('tbmhs',['Password'=>$new_password]);
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

		function getmahasiswa($idmhs)
		{
			return $this->db->get_where('tbmhs',['id_mhs'=>$idmhs])->row();
		}

		function getperusahaan($Id_Perusahaan)
		{
			return $this->db->get_where('tbperusahaan',['Id_Perusahaan'=>$Id_Perusahaan])->row();
		}

        function tampildata()
		{
			$sql="select * from tbperusahaan";
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
			$Nama=$this->input->post('Nama');
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
				'Nama'=>$Nama,
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
    }
?>