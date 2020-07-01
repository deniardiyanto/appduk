<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Lap_pemohon extends CI_Controller {

  public function __construct(){
    parent::__construct();
    
    $this->load->model('laporan2_model');
}

public function index(){
        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user
            if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                $tanggal = $_GET['tanggal'];
                
                $ket = 'Data Tanggal '.date('d-m-y', strtotime($tanggal));
                $url_cetak = 'admin/Lap_pemohon/cetak?filter=1&tahun='.$tanggal;
                $lap_pemohon = $this->laporan2_model->view_by_date($tanggal); // Panggil fungsi view_by_date yang ada di TransaksiModel
            }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                
                $ket = 'Data Bulan '.$nama_bulan[$bulan].' '.$tahun;
                $url_cetak = 'admin/Lap_pemohon/cetak?filter=2&bulan='.$bulan.'&tahun='.$tahun;
                $lap_pemohon = $this->laporan2_model->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel
            }else{ // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];
                
                $ket = 'Data Tahun '.$tahun;
                $url_cetak = 'admin/Lap_pemohon/cetak?filter=3&tahun='.$tahun;
                $lap_pemohon = $this->laporan2_model->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel
            }
        }else{ // Jika user tidak mengklik tombol tampilkan
            $ket = 'Semua Data';
            $url_cetak = 'admin/lap_pemohon/cetak';
            $lap_pemohon = $this->laporan2_model->view_all(); // Panggil fungsi view_all yang ada di TransaksiModel
        }
        
        $data['ket'] = $ket;
        $data['url_cetak'] = base_url($url_cetak);
        $data['lap_pemohon'] = $lap_pemohon;
        $data['option_tahun'] = $this->laporan2_model->option_tahun();
        $data["jum"] = $this->cekstatus_model->jumOnprogress();
        $data["jumt"] = $this->cekstatus_model->jumPenTot();
        $data["jumk"] = $this->cekstatus_model->jumKriTot();
        $this->load->view('admin/laporan/v_laporanpemohon', $data);
    }

    public function cetak(){
        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user
            if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                $tanggal = $_GET['tanggal'];
                
                $ket = 'Data Tanggal '.date('d-m-y', strtotime($tanggal));
                $lap_pemohon = $this->laporan2_model->view_by_date($tanggal); // Panggil fungsi view_by_date yang ada di TransaksiModel
            }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                
                $ket = 'Data Bulan '.$nama_bulan[$bulan].' '.$tahun;
                $lap_pemohon = $this->laporan2_model->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel
            }else{ // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];
                
                $ket = 'Data Tahun '.$tahun;
                $lap_pemohon = $this->laporan2_model->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel
            }
        }else{ // Jika user tidak mengklik tombol tampilkan
            $ket = 'Semua Data';
            $lap_pemohon = $this->laporan2_model->view_all(); // Panggil fungsi view_all yang ada di TransaksiModel
        }
        
        $data['ket'] = $ket;
        $data['lap_pemohon'] = $lap_pemohon;
        
        ob_start();
        $this->load->view('admin/laporan/print2', $data);
        $html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P','A4','en');
        $pdf->WriteHTML($html);
        $pdf->Output('Data Pemohon.pdf', 'D');
    }
}