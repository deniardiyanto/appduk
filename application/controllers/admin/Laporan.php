<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Laporan extends CI_Controller{
  public function __construct()
  {
    parent::__construct();
  }

  public function index(){
  	$data["jum"] = $this->cekstatus_model->jumOnprogress();
    $data["jumt"] = $this->cekstatus_model->jumPenTot();
    $data["jumk"] = $this->cekstatus_model->jumKriTot();
    $this->load->view("admin/laporan/v_laporan",$data);
  }

}