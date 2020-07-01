<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Akun_model extends CI_Model {

  private $_table = "tb_login";
  private $_table2 = "tb_petugas";

    public $nip1;
    public $nama1;
    public $pass1;
    public $nip2;
    public $nama2;
    public $pass2;
    public $level1;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getAll2()
    {
        return $this->db->get($this->_table2)->result();
    }
    
    public function getById($nip)
    {
        return $this->db->get_where($this->_table, ["nip" => $nip])->row();
    }

	public function delete($nip1)
    {
        return $this->db->delete($this->_table, array("nip" => $nip1));
    }
    public function getById2($nip)
    {
        return $this->db->get_where($this->_table2, ["nip" => $nip])->row();
    }

    public function delete2($nip2)
    {
        return $this->db->delete($this->_table2, array("nip" => $nip2));
    }

    public function simpan_akun($niip,$nma,$ps,$lvl){
        $hasil=$this->db->query("INSERT INTO tb_login (nip,nama,pass,level) VALUES ('$niip','$nma','$ps','$lvl')");
        return $hasil;
    }
    public function edit_akun($nip1,$nama1,$pass1,$level1){
        $hasil2=$this->db->query("UPDATE tb_login SET nama='$nama1',pass='$pass1' ,level='$level1' WHERE nip='$nip1'");
        return $hasil2;
    }
    
    public function simpan_akun2($niip2,$nma2,$ps2){
        $hasil3=$this->db->query("INSERT INTO tb_petugas (nip,nama,pass) VALUES ('$niip2','$nma2','$ps2')");
        return $hasil3;
    }

    public function edit_akun2($nip2,$nama2,$pass2){
        $hasil4=$this->db->query("UPDATE tb_petugas SET nama='$nama2',pass='$pass2' WHERE nip='$nip2'");
        return $hasil4;
    }
}



