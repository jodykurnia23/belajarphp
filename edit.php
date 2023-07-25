<?php
    require "functions.php";

    // ambil data di URL
    $id = $_GET["id"];

    // query data mahasiswa berdasarkan id
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
   
    // cek apakah tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"])){
      if(edit($_POST) > 0){
          echo "<script>
                  alert('Data berhasil diedit')
                  document.location.href = 'index.php';
                </script>";
      } else{
              "<script>
                  alert('Data gagal diedit')
                  document.location.href = 'index.php';
              </script>";
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

   <div class="box">
      <div class="container">
        <div class="top-header">
          <header>Edit Data Mahasiswa</header>
        </div>
      <form action="" method="post">
        <div class="input-field">
          <input type="hidden" class="input" name="id"  placeholder="id" required value="<?= $mhs["id"]?>" autocomplete="off">
        </div>
        <div class="input-field">
          <input type="text" class="input" name="nama"  placeholder="Nama" required value="<?= $mhs["nama"]?>" autocomplete="off">
        </div>
        <div class="input-field">
          <input type="text" class="input" name="nim"  placeholder="Nim" required value="<?= $mhs["nim"]?>" autocomplete="off">
        </div>
        <div class="input-field">
          <input type="text" class="input" name="email"  placeholder="Email" required value="<?= $mhs["email"]?>" autocomplete="off">
        </div>
        <div class="input-field">
          <input type="text" class="input" name="prodi"  placeholder="Prodi" required value="<?= $mhs["prodi"]?>" autocomplete="off">
        </div>
        <div class="input-field">
          <input type="text" class="input" name="gambar"  placeholder="Gambar" required value="<?= $mhs["gambar"]?>" >
        </div>
        <div class="input-field">
          <button type="submit" class="submit" name="submit">Edit Data !</button>
        </div>
      </form>
      </div>
   </div>

    
</body>
</html>