<?php
class Cekstatus_model extends CI_Model{
    //cek nip
	public function __construct()
  {
    //$this->load->database();
  }
  public function cariOrang()
  {
    $cari = $this->input->GET('cari', TRUE);
    $data = $this->db->query("SELECT * from pendaftar where nik='$cari' AND status='Jadi' ");
    return $data->result();
  }
  public function jumOnprogress()
  {
    $data = $this->db->query("SELECT COUNT(status) as jum_status FROM pendaftar WHERE status='Dalam Proses'");
    return $data->row_array();
  }
  public function jumOnjadi()
  {
    $data = $this->db->query("SELECT COUNT(status) as jum_statusjadi FROM pendaftar WHERE status='Jadi'");
    return $data->row_array();
  }
  public function jumOnmasuk()
  {
    $data = $this->db->query("SELECT COUNT(nik) as jum_statusmasuk FROM pendaftar WHERE status IS NULL");
    return $data->row_array();
  }
  public function jumPenTot()
  {
    $data = $this->db->query("SELECT COUNT(nik) as jum_pentot FROM pendaftar");
    return $data->row_array();
  }
  public function jumKriTot()
  {
    $data = $this->db->query("SELECT COUNT(id_kritik) as jum_kritot FROM tb_kritiksaran");
    return $data->row_array();
  }

}
