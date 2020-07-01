<?php

/**
 * @Author  : DeniArdi>
 * @Date    : -.
 */
class Pendaftarkerja extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("pendaftar");
    }
    public function index() {

        $data["jumk"] = $this->cekstatus_model->jumKriTot();
        $data["jum"] = $this->cekstatus_model->jumOnprogress();
        $data["pendaftar"] = $this->pendaftar->get();
        $this->load->view("pendaftarkerja", $data);
    }

    public function detail($nik = 0) {

        $data["jumk"] = $this->cekstatus_model->jumKriTot();
        $data["jum"] = $this->cekstatus_model->jumOnprogress();
        $data = array(
            'pendaftar' => $this->pendaftar->detail($nik)
        );
        if(count($data["pendaftar"]) < 1) {
            redirect("pendaftarkerja");
        }
        $data["pendaftar"] = $data["pendaftar"][0];

        $this->load->view("admin/detailpendaftar", $data);
    }

}