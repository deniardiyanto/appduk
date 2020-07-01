<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("pendaftar");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["jumk"] = $this->cekstatus_model->jumKriTot();
        $data["jum"] = $this->cekstatus_model->jumOnprogress();
        $data["jumjadi"] = $this->cekstatus_model->jumOnjadi();
        $data["jummasuk"] = $this->cekstatus_model->jumOnmasuk();
        $data["daftar_admin"] = $this->pendaftar->getAll();
        $data["pendaftar"] = $this->pendaftar->pemohondalamproses();
        $this->load->view("admin/daftar/random", $data);
        //$this->load->view("admin/daftar/list", $data);
    }
    public function list()
    {
        $data["jumk"] = $this->cekstatus_model->jumKriTot();
        $data["jum"] = $this->cekstatus_model->jumOnprogress();
        $data["daftar_admin"] = $this->pendaftar->getAll();
        /*$data = array(
            'pendaftar' => $this->pendaftar->getRandom() // panggil fungsi yang sudah kita buat dimodel
        );*/
        //$this->load->view("admin/daftar/random", $data);
        $this->load->view("admin/daftar/list", $data);
    }

    public function add()
    {
        $daftar = $this->pendaftar;
        $validation = $this->form_validation;
        $validation->set_rules($daftar->rules());

        if ($validation->run()) {
            $daftar->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data["jumk"] = $this->cekstatus_model->jumKriTot();
        $data["jum"] = $this->cekstatus_model->jumOnprogress();

        $this->load->view("admin/daftar/new_form",$data);
    }

    public function edit($nik = null)
    {
        if (!isset($nik)) redirect('admin/daftar_admin');
        
        $daftar = $this->pendaftar;
        $validation = $this->form_validation;
        $validation->set_rules($daftar->rules());

        if ($validation->run()) {
            $daftar->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["jumk"] = $this->cekstatus_model->jumKriTot();
        $data["jum"] = $this->cekstatus_model->jumOnprogress();
        $data["daftar"] = $daftar->getById($nik);
        if (!$data["daftar"]) show_404();
        
        $this->load->view("admin/daftar/edit_form", $data);
    }
    public function edit2($nik = null)
    {
        if (!isset($nik)) redirect('admin/pendaftarkerja');
        
        $daftar = $this->pendaftar;
        $validation = $this->form_validation;
        $validation->set_rules($daftar->rules());

        if ($validation->run()) {
            $daftar->update2();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["jumk"] = $this->cekstatus_model->jumKriTot();
        $data["jum"] = $this->cekstatus_model->jumOnprogress();
        $data["daftar"] = $daftar->getById($nik);
        if (!$data["daftar"]) show_404();
        
        $this->load->view("admin/daftar/edit_form2", $data);
    }

    public function delete($nik=null)
    {
        if (!isset($nik)) show_404();
        
        if ($this->pendaftar->delete($nik)) {
            redirect(site_url('admin/Daftar_admin/list'));
        }
    }
    
}