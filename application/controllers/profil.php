<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profil extends CI_Controller {

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
		$this->load->model('m_profil');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['laporan'] = $this->m_profil->tampil_data()->result();
		$this->load->view('profil',$data);
	}

	public function hapus($id)
	{	
		$this->m_profil->hapus_data($id);
		$data['laporan'] = $this->m_profil->tampil_data();
		redirect('profil');
		/*$where = array('id_laporan' =>$id);
		$this->m_profil->hapus_data($where,'laporan')->result();
		$this->load->view('profil',$data);*/
	}

	public function update(){
		$judul = $this->input->post('judul');
		$id = $this->input->post('id_laporan');
		$deskripsi = $this->input->post('deskripsi');
		$tanggal = $this->input->post('tanggal');
		$alamat = $this->input->post('alamat');
		$media = $this->input->post('gambar');

		$data = array(
			'judul' => $judul,
			'deskripsi' => $deskripsi,
			'tanggal' => $tanggal,
			'alamat' => $alamat,
			'media' => $media
		);

		$where = array(
			'id_laporan'=> $id
		);

		$this->db->where($where);
		$this->db->update('laporan',$data);
		redirect('profil');
	}

}
