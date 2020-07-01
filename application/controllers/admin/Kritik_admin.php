<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kritik_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("pengunjung_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["jumk"] = $this->cekstatus_model->jumKriTot();
        $data["jum"] = $this->cekstatus_model->jumOnprogress();
        $data["tb_kritiksaran"] = $this->pengunjung_model->getAll();
        $this->load->view("admin/kritik/pengunjungkritik", $data);
    }

    public function delete($id_kritik=null)
    {
        if (!isset($id_kritik)) show_404();
        
        if ($this->pengunjung_model->delete($id_kritik)) {
            redirect(site_url('admin/Kritik_admin'));
        }
    }
}