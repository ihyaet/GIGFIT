<?php
class login_admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
	}

	function index(){
		$this->load->view('login_peg');
	}

	function auth(){
		$username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
		$password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
	
		$cek_admin= $this->m_admin->auth_admin($username,$password);
		if($cek_admin->num_rows() > 0){
			$data=$cek_admin->row_array();
			$this->session->set_userdata('masuk',TRUE);
			$this->session->set_userdata('akses','1');
			$this->session->set_userdata('ses_username', $data['username']);
			$this->session->set_userdata('ses_email', $data['email']);
			redirect('olah');
		}else{
			$this->load->view('login_peg');
		}
	}
	function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
}