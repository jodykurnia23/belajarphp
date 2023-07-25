<?php 

require "functions.php";

$field = ['No', 'Aksi', 'Gambar', 'NIM', 'Nama', 'Email', 'Prodi'];

$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");

if( isset($_POST["cari"]) ){
    $mahasiswa = cari($_POST["keyword"]);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    
    <a href="index.php" class="text-decoration-none judul"><h1 class="text-center mt-5 mb-5">Data Mahasiswa</h1></a>
    <div class="container">
        <a href="tambah.php" class="tautan">Tambah data!</a>
    </div>

    <form action="" method="post">
        <div class="search container">
            <input type="text" name="keyword" class="keyword" placeholder="Silahkan cari data yang diinginkan..." autofocus autocomplete="off">
            <button type="submit" class="cari" name="cari">Cari data!</button>
        </div>
    </form>
    
    <div class="container rounded-2">
        <table class="table table-dark table-striped border text-center mt-5">
            <thead>
                <?php foreach( $field as $judul ):?>
                    <th><?= $judul ?></th>
                <?php endforeach ?>
            </thead>
            <?php $i = 1 ?>
            <?php foreach($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= $i?></td>
                    <td>
                        <a href="edit.php?id=<?= $mhs["id"];?>">Edit</a> | 
                        <a href="hapus.php?id=<?= $mhs["id"];?>" onclick="return confirm('Data ini benar akan dihapus?');">Hapus</a>
                    </td>
                    <td><img src="./img/<?= $mhs["gambar"]?>" alt="" width="50px"></td>
                    <td><?= $mhs["nama"]?></td>
                    <td><?= $mhs["nim"]?></td>
                    <td><?= $mhs["email"]?></td>
                    <td><?= $mhs["prodi"]?></td>
                </tr>
            <?php $i++ ?>
            <?php endforeach ?>
        </table>
    </div>




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>