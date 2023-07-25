<?php
    require "functions.php";

    if(isset($_POST["submit"])){
      if(tambah($_POST) > 0){
          echo "<script>
                alert('Data berhasil ditambahkan')
                document.location.href = 'index.php';
                </script>";
      } else{
              "<script>
                alert('Data berhasil ditambahkan')
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
          <header>Tambah Data Mahasiswa</header>
        </div>
      <form action="" method="post">
        <div class="input-field">
          <input type="text" class="input" name="nama"  placeholder="Nama" required autofocus autocomplete="off">
        </div>
        <div class="input-field">
          <input type="text" class="input" name="nim"  placeholder="Nim" required autocomplete="off">
        </div>
        <div class="input-field">
          <input type="text" class="input" name="email"  placeholder="Email" required autocomplete="off">
        </div>
        <div class="input-field">
          <input type="text" class="input" name="prodi"  placeholder="Prodi" required autocomplete="off">
        </div>
        <div class="input-field">
          <input type="text" class="input" name="gambar"  placeholder="Gambar" required autocomplete="off">
        </div>
        <div class="input-field">
          <button type="submit" class="submit" name="submit">Kirim Data !</button>
        </div>
      </form>
      </div>
   </div>

    
</body>
</html>