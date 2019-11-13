<?php 
 
class m_laporan extends CI_Model{
	function tampil_data(){
		return $this->db->get('laporan');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
 
	function hapus_data($where){
		$this->db->where('id_laporan', $where)->delete('laporan');
		//$this->db->where($where);
		//$this->db->delete($table);
	}
 
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		//return $this->db->where('id_laporan',$id)->update('laporan',$data);
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}