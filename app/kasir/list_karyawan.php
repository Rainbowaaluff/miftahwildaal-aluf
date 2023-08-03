<?php
require "..//../config/config_database.php";
$db = koneksi(hostname, username, password, database);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> kasir</title>
</head>
<body>
    <a href="form_kasir.php">Tambah Data</a>
    <?php 
    $query = $db->query("SELECT * FROM kasir");
    ?>
    <table>
        <thead>
        <tr>
            <th>No</th> 
            <th>Id_kasir</th>
            <th>Nama karyawan</th> 
            <th>jenis kelamin</th> 
            <th>Act </th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        while($row = $query->fetch_array()){
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $row['id_kasir'];?></td>
                <td><?php echo $row['nama_karyawan'];?></td>
                <td><?php echo $row['jenis_kelamin'];?></td>
                <td><a href="form_kasir.php?act=edit&id_kasir=<?php echo $row['id_kasir'];?>">EDIT</a>
                    | Hapus </td>
        </tr>
            <?php
            }
            ?>
    </tbody>
</table>
</body>
</html>