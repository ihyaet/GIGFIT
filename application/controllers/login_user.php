<?php
class login_user extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}

	function index(){
		$this->load->view('login_masy');
	}

	function auth(){
		$username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
		$password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
	
		$cek_user= $this->m_login->auth_user($username,$password);
		if($cek_user->num_rows() > 0){
			$data=$cek_user->row_array();
			$this->session->set_userdata('masuk',TRUE);
			$this->session->set_userdata('akses','2');
			$this->session->set_userdata('ses_nama', $data['nama']);
			$this->session->set_userdata('ses_email', $data['email']);
			$this->session->set_userdata('ses_no_hp', $data['no_telp']);
			redirect('profil');
		}else{
			$this->load->view('login_masy');
		}
	}
	function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
}