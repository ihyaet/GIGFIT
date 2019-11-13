<?php 
 
class m_admin extends CI_Model{
 function auth_admin($username,$password){
 	$query=$this->db->query("SELECT * FROM bpdb WHERE username='$username' AND password='$password'LIMIT 1");
 	return $query;
 }
}