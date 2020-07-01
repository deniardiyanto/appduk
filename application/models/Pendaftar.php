<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Pendaftar extends CI_Model {

    //fungsi untuk mendapatkan data
    public function get() {
        $this->load->database();
        return $this->db->get("pendaftar")->result();
    }

    // fungsi untuk mendapatkan 4 data random
    public function getRandom() {
        $this->load->database();
        $this->db->order_by("nik", "RANDOM");
        $this->db->limit(4);
        return $this->db->get("pendaftar")->result();
    }

    public function pemohondalamproses()
    {
        $data = $this->db->query("SELECT * FROM pendaftar WHERE status IS NULL ORDER BY tanggal DESC LIMIT 4");
        return $data->result();
    }

    // fungsi untuk detail data
    public function detail($nik) {
        $this->load->database();
        $this->db->where("nik", $nik);
        return $this->db->get("pendaftar")->result();
    }

    // fungsi untuk menambah data
    public function insert($data = array()) {
        $this->load->database();
        return $this->db->insert("pendaftar", $data);

    }

    private $_table = "pendaftar";

    public $nik;
    public $nama;
    public $email;
    public $no_kk;
    public $alamat;
    public $dusun;
    public $rt;
    public $rw;
    public $kelurahan;
    public $kecamatan;
    public $kodepos;
    public $no_skp;
    public $image = "default.jpg";
    public $status;
    public $tanggal;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'nik',
            'label' => 'NIK',
            'rules' => 'required'],

            ['field' => 'no_skp',
            'label' => 'No.SKP',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($nik)
    {
        return $this->db->get_where($this->_table, ["nik" => $nik])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nik = $post["nik"];
        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->no_kk = $post["no_kk"];
        //$this->alamat = $post["alamat"];
        $this->dusun = $post["dusun"];
        $this->rt = $post["rt"];
        $this->rw = $post["rw"];
        $this->kelurahan = $post["kelurahan"];
        $this->kecamatan = $post["kecamatan"];
        $this->kodepos = $post["kodepos"];
        $this->no_skp = $post["no_skp"];
        $this->image = $this-> _uploadImage();
        $this->tanggal = $post["tanggal"]=date('Y-m-d H:i:s');
        date_default_timezone_set('Asia/Jakarta');
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nik = $post["nik"];
        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->no_kk = $post["no_kk"];
        $this->alamat = $post["alamat"];
        $this->no_skp = $post["no_skp"];

        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }
        
        $this->status = $post["status"];
        $this->tanggal = $post["tanggal"];
        $this->db->update($this->_table, $this, array('nik' => $post['nik']));

    }
    public function update2()
    {
        $post = $this->input->post();
        $this->nik = $post["nik"];
        $this->nama = $post["nama"];
        $this->email = $post["email"];
        $this->no_kk = $post["no_kk"];
        $this->alamat = $post["alamat"];
        $this->no_skp = $post["no_skp"];
        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }
        $this->status = $post["status"];
        $this->tanggal = $post["tanggal"];
        $this->db->update($this->_table, $this, array('nik' => $post['nik']));
        
    }

    public function delete($nik)
    {
        $this->_deleteImage($nik);
        return $this->db->delete($this->_table, array("nik" => $nik));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/daftar/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
        $config['file_name']            = $this->nik;
        $config['overwrite']            = true;
        $config['max_size']             = 2048; // 2MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    private function _deleteImage($nik)
    {
        $daftar = $this->getById($nik);
        if ($daftar->image != "default.jpg") {
            $filename = explode(".", $daftar->image)[0];
            return array_map('unlink', glob(FCPATH."upload/daftar/$filename.*"));
        }
    }
}



