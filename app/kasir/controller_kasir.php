<?php
require "..//../config/config_database.php";
$db = koneksi(hostname, username, password, database);

$id_kasir = $_POST['id_kasir'];
$nama_karyawan = $_POST['nama_karyawan'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$query = $db->query("INSERT INTO kasir (id_kasir, nama_karyawan, jenis_kelamin)
VALUES ('$id_kasir','$nama_karyawan','$jenis_kelamin')");
if($query){
    echo "<script>
    alert('YES SUKSES');
    window.alocation.href='list_karyawan.php';
    </script>";
}
else{
    echo "<script>
    alert(' MAAF GAGAL');
    window.alocation.href='form_kasir.php';
    </script>";
}
?>