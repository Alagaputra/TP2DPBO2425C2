<?php
class Perusahaan {
    private $namaPerusahaan, $alamat, $tahunBerdiri;

    public function __construct($namaPerusahaan, $alamat, $tahunBerdiri) {
        $this->setNamaPerusahaan($namaPerusahaan);
        $this->setAlamat($alamat);
        $this->setTahunBerdiri($tahunBerdiri);
    }

    // Setter
    public function setNamaPerusahaan($v){ $this->namaPerusahaan = $v; }
    public function setAlamat($v){ $this->alamat = $v; }
    public function setTahunBerdiri($v){ $this->tahunBerdiri = $v; }

    // Getter
    public function getNamaPerusahaan(){ return $this->namaPerusahaan; }
    public function getAlamat(){ return $this->alamat; }
    public function getTahunBerdiri(){ return $this->tahunBerdiri; }
}
