<?php
class Login_model extends CI_Model{
    //cek nip dan password dosen
	function auth_admin($username,$password){
		$query=$this->db->query("SELECT * FROM tb_login WHERE nip='$username' AND pass='$password' LIMIT 1");
		return $query;
	}

	//cek nim dan password mahasiswa
	function auth_petugas($username,$password){
		$query=$this->db->query("SELECT * FROM tb_petugas WHERE nip='$username' AND pass='$password' LIMIT 1");
		return $query;
	}

}
