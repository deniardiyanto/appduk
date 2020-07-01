<?php

/**
 * @Author  : Deniardi4>
 * @Date    : -.
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Daftar extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model("pendaftar");
        $this->load->library('form_validation');
         
    }
 

    public function index() {

         $daftar = $this->pendaftar;
        $validation = $this->form_validation;
        $validation->set_rules($daftar->rules());

        if ($validation->run()) {
            $daftar->save();
            $this->session->set_flashdata('success', 'Data anda berhasil tersimpan, Silahkan tunggu konfirmasi dari kami melalui email/ dapat anda lihat pada menu CEK STATUS');
        }

        /*$this->load->view("template/header");*/
        $this->load->view("daftar");
        $this->load->view("template/footer");
    }

}

     
