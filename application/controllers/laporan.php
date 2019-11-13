<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller {

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
		$this->load->model('m_laporan');
		$this->load->helper('url','form');
	}

	public function index()
	{
		$data['laporan'] = $this->m_laporan->tampil_data()->result();
		$this->load->view('post');
	}

	public function hapus($id)
	{
		$where = array('id_laporan' =>$id);
		$this->m_laporan->hapus_data($where,'laporan')->result();
		$this->load->view('olah_data',$data);
	} 
	
	function input(){
		
		$judul = $this->input->post('judul');
		$pelapor = $this->input->post('pelapor');
		$deskripsi = $this->input->post('deskripsi');
		$tanggal = $this->input->post('tanggal');
		$alamat = $this->input->post('alamat');
		$media = $this->input->post('media');

		$data = array(
			'judul' => $judul,
			'pelapor' => $pelapor,
			'deskripsi' => $deskripsi,
			'tanggal' => $tanggal,
			'alamat' => $alamat,
			'media' => $media
			);
		$this->m_laporan->input_data($data,'laporan');
		redirect('done');
	}
}
