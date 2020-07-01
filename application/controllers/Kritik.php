<?php

/**
 * @Author  : Deniardi4>
 * @Date    : -.
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Kritik extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('pengunjung_model');
    }
     
    function index(){
        $x['data']=$this->pengunjung_model->show_kritik();
        $this->load->view('admin/kritik/pengunjungkritik',$x);
    }
 
    function simpan_kritik(){

        
        $post = $this->input->post();
        $this->id_kritik = uniqid();
        $mail=$this->input->post('mail');
        $nm=$this->input->post('nm');
        $is=$this->input->post('is');
        $post = $this->input->post();
        $this->tanggal = date("Y-m-d H:i:s");
        date_default_timezone_set('Asia/Jakarta');
        $this->pengunjung_model->simpan_kritik(uniqid(),$mail,$nm,$is,date("Y-m-d H:i:s"));
        redirect('home');
    }

}
