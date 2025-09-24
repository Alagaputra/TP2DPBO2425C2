<?php
require_once "Perusahaan.php";

class Toko extends Perusahaan {
    private $pemilik, $nib, $lokasi, $namaToko, $penghasilan, $jamOperasional;

    public function __construct($namaPerusahaan, $alamat, $tahunBerdiri,
                                $pemilik, $nib, $lokasi, $namaToko, $penghasilan, $jamOperasional) {
        parent::__construct($namaPerusahaan, $alamat, $tahunBerdiri);
        $this->setPemilik($pemilik);
        $this->setNib($nib);
        $this->setLokasi($lokasi);
        $this->setNamaToko($namaToko);
        $this->setPenghasilan($penghasilan);
        $this->setJamOperasional($jamOperasional);
    }

    // Setter
    public function setPemilik($v){ $this->pemilik = $v; }
    public function setNib($v){ $this->nib = $v; }
    public function setLokasi($v){ $this->lokasi = $v; }
    public function setNamaToko($v){ $this->namaToko = $v; }
    public function setPenghasilan($v){ $this->penghasilan = $v; }
    public function setJamOperasional($v){ $this->jamOperasional = $v; }

    // Getter
    public function getPemilik(){ return $this->pemilik; }
    public function getNib(){ return $this->nib; }
    public function getLokasi(){ return $this->lokasi; }
    public function getNamaToko(){ return $this->namaToko; }
    public function getPenghasilan(){ return $this->penghasilan; }
    public function getJamOperasional(){ return $this->jamOperasional; }
}
