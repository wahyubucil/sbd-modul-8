<?php

require_once "connection.php";
require_once "Cuti.php";

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM cuti WHERE id = :id");
$stmt->execute([
    ':id' => $id
]);

$stmt->setFetchMode(PDO::FETCH_CLASS, 'Cuti');
$cuti = $stmt->fetch();

?>
<h2>Apakah anda yakin akan menghapus data ini?</h2>
<table border="1">
    <thead>
        <tr>
            <th>NIK</th>
            <th>Tanggal Mulai</th>
            <th>Lama Cuti</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $cuti->getNik() ?></td>
            <td><?php echo $cuti->getTglMulai() ?></td>
            <td><?php echo $cuti->getLamaCuti() ?></td>
            <td><?php echo $cuti->getKeterangan() ?></td>
        </tr>
    </tbody>
</table>
<form action="aksi_delete.php" method="POST" style="margin-top: 1em">
    <button type="submit">Yakin</button>
    <button type="button" onclick="history.back();">Tidak</button>
</form>