<?php 


class pilih extends CI_Controller{

	function index(){
      $this->load->view('choose_user');
	}

	function masyarakat(){
		$this->load->view('login_masy');
	}
	function admin(){
		$this->load->view('login_peg');
	}
}
