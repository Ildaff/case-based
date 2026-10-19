
<?php

require_once 'data_mahasiswa.php';

$daftarMahasiswa = [$mhs1, $mhs2, $mhs3];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Informasi Nilai Mahasiswa</title>
</head>
<body>

<h2>Sistem Informasi Nilai Mahasiswa</h2>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Program Studi</th>
        <th>Nilai</th>
        <th>Grade</th>
    </tr>

    <?php foreach ($daftarMahasiswa as $mhs) { ?>
        <tr>
            <td><?= $mhs->getNim(); ?></td>
            <td><?= $mhs->getNama(); ?></td>
            <td><?= $mhs->getProdi(); ?></td>
            <td><?= $mhs->getNilai(); ?></td>
            <td><?= $mhs->getGrade(); ?></td>
        </tr>
    <?php } ?>

</table>

</body>
</html>
