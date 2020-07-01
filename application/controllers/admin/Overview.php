<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('cekstatus_model');
	}

	public function index()
	{
        // load view admin/overview.php
        $data["jum"] = $this->cekstatus_model->jumOnprogress();
        print_r($data['jum']);
        //$this->load->view("admin/overview.php",$data);
	}
}