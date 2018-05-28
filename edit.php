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
<h2>Edit Data</h2>
<form action="aksi_edit.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $cuti->getId() ?>">
    <label for="input_nik">NIK</label>
    <input type="text" id="input_nik" name="nik" value="<?php echo $cuti->getNik() ?>">
    <label for="input_tgl_mulai">Tanggal Mulai</label>
    <input type="date" id="input_tgl_mulai" name="tgl_mulai" value="<?php echo $cuti->getTglMulai() ?>">
    <label for="input_lama_cuti">Lama Cuti</label>
    <input type="number" id="input_lama_cuti" name="lama_cuti" value="<?php echo $cuti->getLamaCuti() ?>">
    <label for="input_keterangan">Keterangan</label>
    <input type="text" id="input_keterangan" name="keterangan" value="<?php echo $cuti->getKeterangan() ?>">

    <input type="submit" value="Edit Data">
</form>