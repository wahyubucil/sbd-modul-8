<?php

require_once "connection.php";

$id = $_POST['id'];

try {
    $queryDelete = "DELETE FROM cuti WHERE id = ?";
    $statement = $conn->prepare($queryDelete);

    $statement->execute([$id]);

    header("location:index.php");
} catch (PDOException $e) {
    echo $e;
}

?>