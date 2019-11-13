<?php 
 
class m_login extends CI_Model{
	
 function auth_user($username,$password){
 	$query=$this->db->query("SELECT * FROM user WHERE email='$username' AND password=MD5('$password')LIMIT 1");
 	return $query;
 }
}