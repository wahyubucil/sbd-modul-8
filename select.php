<?php
    require_once "connection.php";
    require_once "Cuti.php";

    $statement = $conn->query("SELECT * FROM cuti");

    $dataCuti = $statement->fetchAll(PDO::FETCH_CLASS, "Cuti");
?>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table tr td {
        padding: 5px;
        text-align: center;
    }
</style>
<table border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>NIK</th>
            <th>Tanggal Mulai</th>
            <th>Lama Cuti</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
            foreach ($dataCuti as $cuti) {
        ?>
        
        <tr>
           <td><?php echo $no ?></td>
           <td><?php echo $cuti->getNik() ?></td>
           <td><?php echo $cuti->getTglMulai() ?></td>
           <td><?php echo $cuti->getLamaCuti() ?></td>
           <td><?php echo $cuti->getKeterangan() ?></td>
           <td>
               <a href="?page=edit&id=<?php echo $cuti->getNo() ?>">Edit</a>
               |
               <a href="?page=delete&id=<?php echo $cuti->getNo() ?>">Delete</a>
           </td>
       </tr>

        <?php
                $no++;
            }
        ?>
    </tbody>
</table>