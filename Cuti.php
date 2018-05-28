<?php

class Cuti {

    protected $no;
    protected $nik;
    protected $tglMulai;
    protected $lamaCuti;
    protected $keterangan;

    public function getNo() {
        return $this->no;
    }

    public function setNo($no) {
        $this->no = $no;
    }

    public function getNik() {
        return $this->nik;
    }

    public function setNik($nik) {
        $this->nik = $nik;
    }

    public function getTglMulai() {
        return $this->tglMulai;
    }

    public function setTglMulai($tglMulai) {
        $this->tglMulai = $tglMulai;
    }

    public function getLamaCuti() {
        return $this->lamaCuti;
    }

    public function setLamaCuti($lamaCuti) {
        $this->lamaCuti = $lamaCuti;
    }

    public function getKeterangan() {
        return $this->keterangan;
    }

    public function setKeterangan($keterangan) {
        $this->keterangan = $keterangan;
    }
}

?>