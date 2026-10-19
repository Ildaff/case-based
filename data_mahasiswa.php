
<?php

require_once 'Mahasiswa.php';

$mhs1 = new Mahasiswa(
    "2301001",
    "Andi",
    "Sistem Informasi"
);

$mhs1->setNilai(90);


$mhs2 = new Mahasiswa(
    "2301002",
    "Budi",
    "Teknik Informatika"
);

$mhs2->setNilai(78);


$mhs3 = new Mahasiswa(
    "2301003",
    "Siti",
    "Sistem Informasi"
);

$mhs3->setNilai(65);

?>
