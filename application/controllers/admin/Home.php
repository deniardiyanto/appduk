<?php

class Home extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }


	public function index()
	{
        // load view admin/overview.php
        $this->load->view("admin/login.php");
	}

	function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_admin=$this->login_model->auth_admin($username,$password);

        if($cek_admin->num_rows() > 0){ //jika login sebagai admin
                        $data=$cek_admin->row_array();
                $this->session->set_userdata('masuk',TRUE);
                 if($data['level']=='1'){ //Akses admin
                    $this->session->set_userdata('akses','1');
                    $this->session->set_userdata('ses_id',$data['nip']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    redirect('admin/page');

                 }else{ //akses kepala
                    $this->session->set_userdata('akses','2');
                                $this->session->set_userdata('ses_id',$data['nip']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    redirect('admin/page');
                 }

        }else{ //jika login sebagai petugas
                    $cek_petugas=$this->login_model->auth_petugas($username,$password);
                    if($cek_petugas->num_rows() > 0){
                            $data=$cek_petugas->row_array();
                    $this->session->set_userdata('masuk',TRUE);
                            $this->session->set_userdata('akses','3');
                            $this->session->set_userdata('ses_id',$data['nip']);
                            $this->session->set_userdata('ses_nama',$data['nama']);
                            redirect('admin/page');
                    }else{  // jika username dan password tidak ditemukan atau salah
                            $url=base_url('admin/home');
                            echo $this->session->set_flashdata('msg','Username Atau Password Salah');
                            redirect($url);
                    }
        }

    }

    function logout(){
        $this->session->sess_destroy();
        $this->load->view("admin/login");
    }

}
