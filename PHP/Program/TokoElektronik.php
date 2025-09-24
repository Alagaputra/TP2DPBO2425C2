<?php
require_once "Toko.php";

class TokoElektronik extends Toko {
    private $namaBarang, $idBarang, $hargaBarang, $fotoBarang;

    public function __construct($namaPerusahaan, $alamat, $tahunBerdiri,
                                $pemilik, $nib, $lokasi, $namaToko, $penghasilan, $jamOperasional,
                                $namaBarang, $idBarang, $hargaBarang, $fotoBarang) {
        parent::__construct($namaPerusahaan, $alamat, $tahunBerdiri,
                            $pemilik, $nib, $lokasi, $namaToko, $penghasilan, $jamOperasional);
        $this->setNamaBarang($namaBarang);
        $this->setIdBarang($idBarang);
        $this->setHargaBarang($hargaBarang);
        $this->setFotoBarang($fotoBarang);
    }

    // Setter
    public function setNamaBarang($v){ $this->namaBarang = $v; }
    public function setIdBarang($v){ $this->idBarang = $v; }
    public function setHargaBarang($v){ $this->hargaBarang = $v; }
    public function setFotoBarang($v){ $this->fotoBarang = $v; }

    // Getter
    public function getNamaBarang(){ return $this->namaBarang; }
    public function getIdBarang(){ return $this->idBarang; }
    public function getHargaBarang(){ return $this->hargaBarang; }
    public function getFotoBarang(){ return $this->fotoBarang; }
}
