<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Atur_akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("akun_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        
        $data["jumk"] = $this->cekstatus_model->jumKriTot();
        $data["jum"] = $this->cekstatus_model->jumOnprogress();
        $data["tb_login"] = $this->akun_model->getAll();
        $data["tb_petugas"] = $this->akun_model->getAll2();
        $this->load->view("admin/akun/v_akun", $data);
    }

    public function delete($nip1=null)
    {
        if (!isset($nip1)) show_404();
        
        if ($this->akun_model->delete($nip1)) {
            redirect(site_url('admin/atur_akun'));
        }
    }
    public function delete2($nip2=null)
    {
        if (!isset($nip2)) show_404();
        
        if ($this->akun_model->delete2($nip2)) {
            redirect(site_url('admin/atur_akun'));
        }
    }

    function simpan_akun(){

        $niip=$this->input->post('niip');
        $nma=$this->input->post('nma');
        $ps=$this->input->post('ps');
        $lvl=$this->input->post('lvl');
        $this->akun_model->simpan_akun($niip,$nma,$ps,$lvl);
        redirect('admin/atur_akun');
    }

    function edit_akun(){

        $nip1=$this->input->post('nip1');
        $nama1=$this->input->post('nama1');
        $pass1=$this->input->post('pass1');
        $level1=$this->input->post('level1');
        $this->akun_model->edit_akun($nip1,$nama1,$pass1,$level1);
        redirect('admin/atur_akun');
    }

     function simpan_akun2(){

        $niip2=$this->input->post('niip2');
        $nma2=$this->input->post('nma2');
        $ps2=$this->input->post('ps2');
        $this->akun_model->simpan_akun2($niip2,$nma2,$ps2);
        redirect('admin/atur_akun');
    }

    function edit_akun2(){
        $nip2=$this->input->post('nip2');
        $nama2=$this->input->post('nama2');
        $pass2=$this->input->post('pass2');
        $this->akun_model->edit_akun2($nip2,$nama2,$pass2);
        redirect('admin/atur_akun');
    }
}