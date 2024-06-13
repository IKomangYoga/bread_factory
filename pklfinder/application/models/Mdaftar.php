<?php
    class Mdaftar extends CI_Model
    {
        function simpandaftarmhs()
        {
            $subject='Aktivasi Akun';
            $message=
            '<html>
                <h2>PKL Finder</h2>
                <p>Your Account has been Successfully Registered</p>
            </html>';
            $Nim=$this->input->post('Nim');
			$Nama=$this->input->post('Nama');
            $Password=$this->input->post('Password');
            $Jurusan=$this->input->post('Jurusan');
            $Alamat=$this->input->post('Alamat');
            $Prodi=$this->input->post('Prodi');
			$Email=$this->input->post('Email');
			$No_Telepon=$this->input->post('No_Telepon');
			$Cv=$_FILES['Cv'];
			if ($Cv=''){} 
			else{
				$config['upload_path']		= './assets/foto';
				$config['allowed_types']	= 'jpeg|pdf|jpg';
				$config['max_size']			= 1024*1;


				$this->load->library('upload',$config);
				if (!$this->upload->do_upload('Cv')){
					echo "<script>alert('Upload CV Gagal, Silahkan Coba Lagi');</script>";
					redirect('cdaftarmhs/register','refresh');
				} else {
					$Cv=$this->upload->data('file_name');
				}
			}
			
			$Jenis_Kelamin=$this->input->post('Jenis_Kelamin');
			$Bukti_Ktm=$_FILES['Bukti_Ktm'];
			if ($Bukti_Ktm='')
			{} else{
				$config['upload_path']		= './assets/foto';
				$config['allowed_types']	= 'jpeg|pdf|jpg';
				$config['max_size']			= 1024*1;

				$this->load->library('upload',$config);
				if (!$this->upload->do_upload('Bukti_Ktm')){
					echo "<script>alert('Upload KTM Gagal, Silahkan Coba Lagi');</script>";
					redirect('cdaftarmhs/register','refresh');
				} else {
					$Bukti_Ktm=$this->upload->data('file_name');
				}
			}

            $data=array(
                'Nim'=>$Nim,
				'Nama'=>$Nama,
                'Password'=>$Password,
                'Jurusan'=>$Jurusan,
                'Alamat'=>$Alamat,
                'Prodi'=>$Prodi,
				'Email'=>$Email,
				'No_Telepon'=>$No_Telepon,
				'Cv'=>$Cv,
				'Jenis_Kelamin'=>$Jenis_Kelamin,
				'Bukti_Ktm'=>$Bukti_Ktm
			);
			
			$fieldName = "Nim";
			$tableName = "tbmhs";
			$this->db->where($fieldName, $Nim);
			$query = $this->db->get($tableName);
	
			// If there is a matching record, it's a duplicate
			if ($query->num_rows() == 0 && strpos($Email, "@gmail.com") !== false) {
				$this->db->insert('tbmhs',$data);
				if (isset($data))
				{
					$this->send_mail($Email,$subject,$message);
					redirect('cdaftarmhs/login','refresh');
				}
				else
				{
					redirect('cdaftarmhs/register','refresh');
				}
			}
			else {
				echo "<script>alert('Upload Gagal, Silahkan Coba Lagi');</script>";
				redirect('cdaftarmhs/register','refresh');
			}
        }
        public function send_mail($to, $subject, $message)
		{
			$from = $this->config->item('smtp_user');
			$this->email->set_newline("\r\n");
			$this->email->from($from);
			$this->email->to($to);
			$this->email->subject($subject);
			$this->email->message($message);

			if ($this->email->send())
				{
					return 'success';
				}
			else
				{
					return show_error($this->email->print_debugger());
				}
		}

        function simpandaftarcompany()
        {
            $data=$_POST;
			$this->db->insert('tbperusahaan',$data);
			echo "<script>alert('Akun Perusahaan Anda Berhasil Terdaftar');</script>";
			redirect('cdaftarcompany/logincompany','refresh');
        }
        
    }
?>