<?php
class dinas extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('m_laporan');
		$this->load->helper('url');
	}

	function index(){
		$data['laporan'] = $this->m_laporan->tampil_data()->result();
	    $this->load->view('distribusi', $data);
	}
}