<?php

/**
 * @Author  : Deniardi4>
 * @Date    : -.
 */
class Cekstatus extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('cekstatus_model');
    }
 
    public function index() {
        $this->load->view('cekstatus');
    }
 
    public function hasil()
    {
        $data2['cari'] = $this->cekstatus_model->cariOrang();
        $this->load->view('hasil_cek', $data2);
        $this->load->view("template/footer");
    }
}