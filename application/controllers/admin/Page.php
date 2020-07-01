<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
      $url=base_url('admin/home');
      redirect($url);
    }
  }

 
  function index(){
    $data["jum"] = $this->cekstatus_model->jumOnprogress();
    $data["jum2"] = $this->cekstatus_model->jumOnjadi();
    $data["jumk"] = $this->cekstatus_model->jumKriTot();
    $this->load->view("admin/overview.php",$data);
  }
 
   function data_akun(){
    // function ini hanya boleh diakses oleh admin
    if($this->session->userdata('akses')=='1'){
      redirect(base_url().'admin/atur_akun');
    }else{
      redirect(base_url().'admin/page');
    }
  }

  function atur_laporan(){
    // function ini hanya boleh diakses oleh kepala
    if($this->session->userdata('akses')=='2'){
      redirect(base_url().'admin/laporan');
    }else{
      redirect(base_url().'admin/page');
    }
  }

  function dashboard(){
    // function ini bisa diakses all
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='3'){
      $this->load->view("admin/overview.php");
    }else{
      redirect(base_url().'admin/page');
    }
  }
  function permohonan(){
    // function ini hanya boleh diakses oleh admin dan petugas
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
      redirect(base_url().'admin/daftar_admin');
    }else{
      redirect(base_url().'admin/page');
    }
  }
  function daftarpemohon(){
    // function ini hanya boleh diakses oleh admin dan petugas
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
      redirect(base_url().'admin/pendaftarkerja');
    }else{
      redirect(base_url().'admin/page');
    }
  }
  function kritiksaran(){
    // function ini hanya boleh diakses oleh admin dan petugas
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3'){
      redirect(base_url().'admin/kritik_admin');
    }else{
      redirect(base_url().'admin/page');
    }
  }
}
