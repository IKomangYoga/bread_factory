<?php
    class Cdaftarmhs extends CI_Controller
    {
		public function __construct(){
			parent:: __construct();
			$this->load->config('email');
			$this->load->helper(array('form', 'url'));
		}

        public function login()
	    {
		$data=[
			'header'=>$this->load->view('partial/header','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'sidebar'=>$this->load->view('partial/sidebar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
		];
		$this->load->view('pages-login',$data);
	    }

	
	    public function register()
	    {
		$data=[
			'header'=>$this->load->view('partial/header','',true),
			'navbar'=>$this->load->view('partial/navbar','',true),
			'sidebar'=>$this->load->view('partial/sidebar','',true),
			'footer'=>$this->load->view('partial/footer','',true),
		];
		$this->load->view('pages-register',$data);
	    }

        function simpandaftarmhs()
        {
            $this->load->model('mdaftar');
            $this->mdaftar->simpandaftarmhs();
        }

        function prosesloginmhs()
		{
			$this->load->model('mloginmhs');
			$this->mloginmhs->prosesloginmhs();
		}

		// NOT USED
		// public function doregister()
		// {
		// 	$subject='Aktivasi Akun';
        //     $message=
        //     '<html>
        //         <h2>Aktivasi Akun</h2>
        //         <p>Mohon untuk aktivasi akun Anda dengan klik tombol berikut</p>
        //         <button>Aktivasi</button>
        //     </html>';
        //     $Nim=$this->input->post('Nim');
		// 	$Nama=$this->input->post('Nama');
        //     $Password=$this->input->post('Password');
        //     $Jurusan=$this->input->post('Jurusan');
        //     $Alamat=$this->input->post('Alamat');
        //     $Prodi=$this->input->post('Prodi');
		// 	$email=$this->input->post('email');
		// 	$No_Telepon=$this->input->post('No_Telepon');
		// 	$Cv=$this->input->post('Cv');
		// 	$Jenis_Kelamin=$this->input->post('Jenis_Kelamin');
		// 	$Bukti_Ktm=$this->input->post('Bukti_Ktm');

        //     $data=array(
        //         'Nim'=>$Nim,
		// 		'Nama'=>$Nama,
        //         'Password'=>$Password,
        //         'Jurusan'=>$Jurusan,
        //         'Alamat'=>$Alamat,
        //         'Prodi'=>$Prodi,
		// 		'email'=>$email,
		// 		'No_Telepon'=>$No_Telepon,
		// 		'Cv'=>$Cv,
		// 		'Jenis_Kelamin'=>$Jenis_Kelamin,
		// 		'Bukti_Ktm'=>$Bukti_Ktm
		// 	);

		// 	$this->db->insert('tbmhs',$data);
		// 	if (isset($data))
		// 	{
		// 		$this->send_mail($email,$subject,$message);
		// 		redirect('login','refresh');
		// 	}
        //     else
		// 	{
		// 		redirect('register','refresh');
		// 	}
		// }

		// public function send_mail($to, $subject, $message)
		// {
		// 	$from = $this->config->item('smtp_user');
		// 	$this->email->set_newline("\r\n");
		// 	$this->email->from($from);
		// 	$this->email->to($to);
		// 	$this->email->subject($subject);
		// 	$this->email->message($message);

		// 	if ($this->email->send())
		// 		{
		// 			return 'success';
		// 		}
		// 	else
		// 		{
		// 			return show_error($this->email->print_debugger());
		// 		}
		// }

        function logout()
		{
			$this->session->sess_destroy();
			redirect('','refresh');	
		}
    }
?>