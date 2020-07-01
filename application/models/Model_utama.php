<?php
function pengunjung(){
    return $this->db->query("SELECT * FROM statistik WHERE tanggal='".date("Y-m-d")."' GROUP BY ip");
}
function totalpengunjung(){
    return $this->db->query("SELECT COUNT(hits) as total FROM statistik");
}
function hits(){
    return $this->db->query("SELECT SUM(hits) as total FROM statistik WHERE tanggal='".date("Y-m-d")."' GROUP BY tanggal");
}
function totalhits(){
    return $this->db->query("SELECT SUM(hits) as total FROM statistik");
}
function pengunjungonline(){
    $bataswaktu       = time() - 300;
    return $this->db->query("SELECT * FROM statistik WHERE online > '$bataswaktu'");
}
?>