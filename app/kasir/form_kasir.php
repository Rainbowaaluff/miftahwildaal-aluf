<!DOCTYPE html>
<Html lang="en">
    <head>
        <<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> form kasir</title>
</head>

<body>
   <form action="controller_kasir.php" method="post">
    <div>
        <label for="id_kasir">id_kasir</label>
        <input type="text" name="id_kasir" id="id_kasir">
</div>
    <div>
        <label for="nama_karyawan">nama_karyawan</label>
        <input type="text" name="nama_karyawan" id="nama_karyawan">
</div>
    <div>
        <label for="jenis_kelamin">jenis_kelamin</label>
        <input type="text" name="jenis_kelamin" id="jenis_kelamin">
</div>
    <div>
       <input type="submit" value="simpan data">
</div>
</body>