<?php

require_once "connection.php";

$id = $_POST['id'];
$nik = $_POST['nik'];
$tglMulai = $_POST['tgl_mulai'];
$lamaCuti = $_POST['lama_cuti'];
$keterangan = $_POST['keterangan'];

try {
    $queryUpdate = "UPDATE cuti SET nik = :nik, tgl_mulai = :tgl_mulai, lama_cuti = :lama_cuti, keterangan = :keterangan WHERE id = :id";
    $statement = $conn->prepare($queryUpdate);
    $statement->bindValue(":nik", $nik);
    $statement->bindValue(":tgl_mulai", $tglMulai);
    $statement->bindValue(":lama_cuti", $lamaCuti);
    $statement->bindValue(":keterangan", $keterangan);
    $statement->bindValue(":id", $id);

    $statement->execute();

    header("location:index.php");
} catch (PDOException $e) {
    echo $e;
}

?>