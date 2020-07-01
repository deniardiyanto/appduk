<?php

/**
 * @Author  : Deniardi4>
 * @Date    : -.
 */
class Home extends CI_Controller {

    public function index() {

        $this->load->model("pendaftar");

        

        $this->load->view("template/header");       
        $this->load->view("template/footer");
        $this->load->view("home");
    }

}