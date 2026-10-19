
<?php

class Mahasiswa {
    private $nim;
    private $nama;
    private $prodi;
    private $nilai;

    // Constructor
    public function __construct($nim, $nama, $prodi) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->nilai = 0;
    }

    // Setter nilai dengan validasi
    public function setNilai($nilai) {
        if ($nilai < 0 || $nilai > 100) {
            echo "Nilai harus antara 0 sampai 100!<br>";
            return false;
        }

        $this->nilai = $nilai;
        return true;
    }

    // Getter
    public function getNim() {
        return $this->nim;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getProdi() {
        return $this->prodi;
    }

    public function getNilai() {
        return $this->nilai;
    }

    // Menentukan grade
    public function getGrade() {
        if ($this->nilai >= 85) {
            return "A";
        } elseif ($this->nilai >= 75) {
            return "B";
        } elseif ($this->nilai >= 60) {
            return "C";
        } elseif ($this->nilai >= 50) {
            return "D";
        } else {
            return "E";
        }
    }
}

?>
