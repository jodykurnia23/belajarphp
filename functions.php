<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// Membuat funtion untuk mengambil data ke database phpdasar
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data){
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $prodi = htmlspecialchars($data["prodi"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO mahasiswa values(
                '',
                '$nama',
                '$nim',
                '$email',
                '$prodi',
                '$gambar'
    );";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function edit($data){
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $prodi = htmlspecialchars($data["prodi"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE mahasiswa SET
                nama = '$nama',
                nim = '$nim',
                email = '$email',
                prodi = '$prodi',
                gambar = '$gambar'
                WHERE id =$id
            ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

}

function cari($keyword){
    
    $query = "SELECT * FROM mahasiswa
        WHERE id LIKE '%$keyword%' 
        OR nama LIKE '%$keyword%' 
        OR nim LIKE '%$keyword%'
        OR email LIKE '%$keyword%'
        OR prodi LIKE '%$keyword%'
    ";

    return query($query);
}

?>