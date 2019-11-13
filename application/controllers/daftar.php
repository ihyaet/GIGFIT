<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftar extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();		
		$this->load->model('m_daftar');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['user'] = $this->m_daftar->tampil_data()->result();
		$this->load->view('daftar');
	}

	function signup(){
		$nama = $this->input->post('nama');
		$no_telp = $this->input->post('no_telp');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$data = array(
			'nama' => $nama,
			'no_telp' => $no_telp,
			'email' => $email,
			'password' => md5($password)

			);
		$this->m_daftar->input_data($data,'user');
		redirect('pilih');
	}
}
