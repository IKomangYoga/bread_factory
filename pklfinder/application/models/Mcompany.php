<?php
    class Mcompany extends CI_Model
    {

        function tampildata()
		{
			$sql="select * from tbmhs";
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

        function simpanperusahaan()
		{
			
			$data=$_POST;
			$idperusahaan=$data['Id_Perusahaan'];
			if($idperusahaan=="")
			{
				//simpan
				$this->db->insert('tbperusahaan',$data);
				$this->session->set_flashdata('pesan','Data sudah disimpan...');
				redirect('Ccompany/dashboard','refresh');	
			}
			else
			{
				//edit	
				$update=array(
					'Id_Perusahaan'=>$idperusahaan
				);
				$this->db->where($update);
				$this->db->update('tbperusahaan',$data);
                $sql="select * from tbperusahaan where Id_Perusahaan='".$idperusahaan."'";
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
					'Deskripsi'=>$data->Deskripsi
					);	
					$this->session->set_userdata($array);
				$this->session->set_flashdata('pesan','Data sudah diedit...');
				redirect('Ccompany/dashboard','refresh');	
			}
        }
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
				$config['allowed_types'] = 'jpeg|jpg';
				$config['max_size'] = 1024;
		
				$this->load->library('upload', $config);
		
				if (!$this->upload->do_upload('foto')) {
					echo "<script>alert('Upload Gagal, Silahkan Coba Lagi');</script>";
					redirect('ccompany/status','refresh');
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
			redirect('ccompany/status','refresh');
		}

		function simpanfoto()
		{
			$id = $this->session->userdata('Id_Perusahaan');
			$foto1 = $_FILES['foto1'];
			$foto2 = $_FILES['foto2'];
			$foto3 = $_FILES['foto3'];
		
			if ($foto1 == '') {} else {
				$config['upload_path'] = './assets/fotocompany';
				$config['allowed_types'] = 'jpeg|jpg|png';
				$config['max_size'] = 1024;
		
				$this->load->library('upload', $config);
		
				if (!$this->upload->do_upload('foto1')) {
					echo "<script>alert('Upload Gagal, Silahkan Coba Lagi');</script>";
					redirect('ccompany/dashboard','refresh');
				} else {
					$foto1 = $this->upload->data('file_name');
				}
			}

			if ($foto2 == '') {} else {
				$config['upload_path'] = './assets/fotocompany';
				$config['allowed_types'] = 'jpeg|jpg';
				$config['max_size'] = 1024;
		
				$this->load->library('upload', $config);
		
				if (!$this->upload->do_upload('foto2')) {
					echo "<script>alert('Upload Gagal, Silahkan Coba Lagi');</script>";
					redirect('ccompany/dashboard','refresh');
				} else {
					$foto2 = $this->upload->data('file_name');
				}
			}

			if ($foto3 == '') {} else {
				$config['upload_path'] = './assets/fotocompany';
				$config['allowed_types'] = 'jpeg|jpg';
				$config['max_size'] = 1024;
		
				$this->load->library('upload', $config);
		
				if (!$this->upload->do_upload('foto3')) {
					echo "<script>alert('Upload Gagal, Silahkan Coba Lagi');</script>";
					redirect('ccompany/dashboard','refresh');
				} else {
					$foto3 = $this->upload->data('file_name');
				}
			}
			
			$data = array(
				'foto1' => $foto1,
				'foto2' => $foto2,
				'foto3' => $foto3
			);

			$this->session->set_userdata('foto1', $foto1);
			$this->session->set_userdata('foto2', $foto2);
			$this->session->set_userdata('foto3', $foto3);
			$this->db->where('Id_Perusahaan', $id);
			$this->db->update('tbperusahaan', $data);
			redirect('Ccompany/dashboard','refresh');
		}

        function getperusahaan($idperusahaan)
		{
			return $this->db->get_where('tbperusahaan',['Id_Perusahaan'=>$idperusahaan])->row();
		}

        // public function insert(){
        //     $payload = array(
        //         'Nim'=>$Nim,
        //         'Nama'=>$Nama,
        //         'Password'=>$Password,
        //         'Jurusan'=>$Jurusan,
        //         'Alamat'=>$Alamat,
        //         'Prodi'=>$Prodi,
        //         'Email'=>$Email,
        //         'No_Telepon'=>$No_Telepon,
        //         'Cv'=>$Cv,
        //         'Jenis_Kelamin'=>$Jenis_Kelamin,
        //         'Bukti_Ktm'=>$Bukti_Ktm
        //     );
        //     return $this->db->insert($this->table,$payload);
        // }

        // public function all(){
        //     return $this->db->get($this->table);
        // }
    }
?>