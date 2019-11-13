<?php 

class olah extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('m_laporan');
		$this->load->helper('url');
	}

	function index(){
		$data['laporan'] = $this->m_laporan->tampil_data()->result();
	    $this->load->view('olah_data', $data);
	}

	function verif(){
		$level_kerusakan = $this->input->post('level_kerusakan');
		$status = $this->input->post('status');
		$id = $this->input->post('id_laporan');

		$data = array(
			'level_kerusakan' => $level_kerusakan,
			'status' => $status
			);

		$where = array(
			'id_laporan'=> $id
		);

		$this->db->where($where);
		$this->db->update('laporan',$data);
		redirect('olah');
	}
}