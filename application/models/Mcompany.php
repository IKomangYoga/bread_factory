<?php
    class Mcompany extends CI_Model
    {
		public function __construct()
	    {
			parent::__construct();
			$this->load->model('Mvalidasicompany');
			$this->Mvalidasicompany->validasi();
	    }

		

		function getperusahaan($id_Pegawai_Pabrik)
		{
			return $this->db->get_where('pegawai_pabrik',['id_Pegawai_Pabrik'=>$id_Pegawai_Pabrik])->row();
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

		function tambah_roti($data)
   		{
        $this->db->insert('roti', $data);
    	}

	
		public function update_status($order_id, $new_status) {
			// Update status di tabel orders
			$this->db->where('id', $order_id);
			$this->db->update('orders', ['order_status' => $new_status]);
			
			// Masukkan perubahan status ke tabel order_history
			$data = [
				'order_id' => $order_id,
				'status' => $new_status,
				'changed_at' => date('Y-m-d H:i:s')
			];
			$this->db->insert('order_history', $data);
		}


        function simpanperusahaan()
		{
			
			$data=$_POST;
			$idperusahaan=$data['id_Pegawai_Pabrik'];
			if($idperusahaan=="")
			{
				//simpan
				$this->db->insert('pegawai_pabrik',$data);
				$this->session->set_flashdata('pesan','Data sudah disimpan...');
				redirect('Ccompany/dashboard','refresh');	
			}
			else
			{
				//edit	
				$update=array(
					'id_Pegawai_Pabrik '=>$idperusahaan
				);
				$this->db->where($update);
				$this->db->update('pegawai_pabrik',$data);
                $sql="select * from pegawai_pabrik where id_Pegawai_Pabrik ='".$idperusahaan."'";
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
			$Nama_pegawai_outlet=$this->input->post('Nama_pegawai_outlet');
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
				'Nama_pegawai_outlet'=>$Nama_pegawai_outlet,
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
			$this->db->update('pegawai_pabrik', $data);
			redirect('Ccompany/dashboard','refresh');
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