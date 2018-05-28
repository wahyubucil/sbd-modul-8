<?php

class Cuti {

    protected $id;
    protected $nik;
    protected $tgl_mulai;
    protected $lama_cuti;
    protected $keterangan;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNik() {
        return $this->nik;
    }

    public function setNik($nik) {
        $this->nik = $nik;
    }

    public function getTglMulai() {
        return $this->tgl_mulai;
    }

    public function setTglMulai($tglMulai) {
        $this->tgl_mulai = $tglMulai;
    }

    public function getLamaCuti() {
        return $this->lama_cuti;
    }

    public function setLamaCuti($lamaCuti) {
        $this->lama_cuti = $lamaCuti;
    }

    public function getKeterangan() {
        return $this->keterangan;
    }

    public function setKeterangan($keterangan) {
        $this->keterangan = $keterangan;
    }
}

?>