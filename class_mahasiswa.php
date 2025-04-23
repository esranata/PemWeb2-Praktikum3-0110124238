<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $matakuliah;
    public $nilai;

    public function __construct($nama, $nim, $matakuliah, $nilai) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->matakuliah = $matakuliah;
        $this->nilai = $nilai;
    }

    public function kelulusan(){
       return ($this->nilai >= 60) ? "Lulus" : "Tidak Lulus";
    }

    public function grade(){
        if ($this->nilai >= 85) {
            return "A";
        }
         else if ($this->nilai >= 70) {
            return "B";
        }
        else if ($this->nilai >= 55) {
            return "C";
        }
        else if ($this->nilai >= 40) {
            return "D";
        }
        else {
            return "E";
        }
 
    }
}
?>