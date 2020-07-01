<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Pengunjung_model extends CI_Model {

  private $_table = "tb_kritiksaran";

    public $id_kritik;
    public $email;
    public $nama;
    public $isi;
    public $tanggal;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_kritik)
    {
        return $this->db->get_where($this->_table, ["id_kritik" => $id_kritik])->row();
    }

	public function delete($id_kritik)
    {
        return $this->db->delete($this->_table, array("id_kritik" => $id_kritik));
    }

    public function get_kritik()
    {
        $query = $this->db->get('tb_kritiksaran');
        return $query->result_array();
    }

    public function simpan_kritik($idkritik,$mail,$nm,$is,$tgl){
        $hasil=$this->db->query("INSERT INTO tb_kritiksaran (id_kritik,email,nama,isi,tanggal) VALUES ('$idkritik','$mail','$nm','$is','$tgl')");
        return $hasil;
    }


   /* public function cetakpdf(){
      $judul = 'Laporan Kritik dan Saran';
      $kolom = array('id_kritik'=>'Id_kritik',
                      'email' => 'Email',
                      'nama' => 'Nama',
                      'isi' => 'Isi',
                      'tanggal' => 'Tanggal'
                );
      //query
      $query = $this->db->query("select id_kritik,email,nama,isi, tanggal from tb_kritiksaran 
               where tanggal like '2018-12%'")          
      $data = $query->result_array();
      /*return $data;
     /* $this->generatePdf2($kolom, $data,"Laporan Kritik dan Saran");
  }
  
  private function generatepdf($header,$data,$judul){
    //load library tcpdf
    $this->load->library('tcpdf/CustomHeader');
    // create new PDF document
    $pdf = new CustomHeader(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        
    // set document information
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('@DisdukcapilSleman2018');
    $pdf->SetTitle('REPORT KRITIK SARAN');
    $pdf->SetSubject('PENGUNJUNG');
    $pdf->SetKeywords('TCPDF, PDF, example, test, guide');
        
    // set default header data
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 011', 
       PDF_HEADER_STRING);
        
    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
     
    // set default monospaced font
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
      
    // set margins
    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        
    // set auto page breaks
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        
    // set image scale factor
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        
    // set some language-dependent strings (optional)
    if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
         require_once(dirname(__FILE__).'/lang/eng.php');
         $pdf->setLanguageArray($l);
    }
    // set font
    $pdf->SetFont('helvetica', '', 12);
    // add a page
    $pdf->AddPage();
    //judul
    $pdf->Cell(0,20, $judul, 0, 1, 'C', 0, '',0,FALSE);
    // print colored table
    $pdf->ColoredTable($header, $data);        
    // close and output PDF document
    $pdf->Output('Lap.pdf', 'I');
  }
}*/


}



