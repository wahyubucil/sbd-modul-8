<?php

require_once "connection.php";

$nik = $_POST['nik'];
$tglMulai = $_POST['tgl_mulai'];
$lamaCuti = $_POST['lama_cuti'];
$keterangan = $_POST['keterangan'];

try {
    $queryInsert = "INSERT INTO cuti(nik, tgl_mulai, lama_cuti, keterangan) VALUES(:nik, :tgl_mulai, :lama_cuti, :keterangan)";
    $statement = $conn->prepare($queryInsert);

    $statement->execute([
        ':nik' => $nik,
        ':tgl_mulai' => $tglMulai,
        ':lama_cuti' => $lamaCuti,
        ':keterangan' => $keterangan
    ]);

    header("location:index.php");
} catch (PDOException $e) {
    echo $e;
}

?>