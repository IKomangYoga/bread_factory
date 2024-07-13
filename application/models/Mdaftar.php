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
            $id_pegawai_outlet =$this->input->post('id_pegawai_outlet');
			$no_telepon=$this->input->post('no_telepon');
            $nama_pegawai_outlet=$this->input->post('nama_pegawai_outlet');
            $jabatan_pegawa_outlet=$this->input->post('jabatan_pegawa_outlet');
            $Divisi_pegawai_outlet=$this->input->post('Divisi_pegawai_outlet');
            $password=$this->input->post('password');

            $data=array(
				'id_Pegawai_Outlet' => $id_pegawai_outlet,
				'Alamat_pegawai_outlet' => $no_telepon,
				'Nama_pegawai_outlet' => $nama_pegawai_outlet,
				'jabatan_pegawa_outlet' => $jabatan_pegawa_outlet,
				'Divisi_pegawai_outlet' => $Divisi_pegawai_outlet,
				'password' => $password
			);
			
			$fieldName = "id_Pegawai_Outlet";
			$tableName = "pegawai_outlet";
			$this->db->where($fieldName, $fieldName);
			$query = $this->db->get($tableName);
	
			// If there is a matching record, it's a duplicate
			if ($query->num_rows() == 0 /*&& strpos($Email, "@gmail.com") !== false*/) {
				$this->db->insert('pegawai_outlet',$data);
				if (isset($data))
				{
					//$this->send_mail($Email,$subject,$message);
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
			$this->db->insert('pegawai_pabrik',$data);
			echo "<script>alert('Akun Perusahaan Anda Berhasil Terdaftar');</script>";
			redirect('cdaftarcompany/logincompany','refresh');
        }
        
    }
?>