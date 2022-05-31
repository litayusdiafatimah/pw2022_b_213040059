<?php 
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    $judul = htmlspecialchars ($data["judul"]);
    $genre = htmlspecialchars($data["genre"]);
    $durasi = htmlspecialchars($data["durasi"]);
    $sutradara = htmlspecialchars($data["sutradara"]);
    $pemeran = htmlspecialchars($data["pemeran"]);
    $poster = upload();
    if( !$poster ) {
        return false;
    }
    $sinopsis = htmlspecialchars($data["sinopsis"]);

    $query = "INSERT INTO film
              VALUES
            ('', '$judul', '$genre', '$durasi', '$sutradara', '$pemeran', '$poster', '$sinopsis')
            ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function upload () {

    $namaFile = $_FILES['poster']['name'];
    $ukuranFile = $_FILES['poster']['size'];
    $error = $_FILES['poster']['error'];
    $tmpName = $_FILES['poster']['tmp_name'];

    if( $error === 4 ) {
        echo "<script>
                alert('pilih gambar terlebih dahulu');
            </script>";
        return false;
    }

    $ekstensiPosterValid = ['jpg', 'jpeg', 'png'];
    
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM film WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $judul = htmlspecialchars ($data["judul"]);
    $genre = htmlspecialchars($data["genre"]);
    $durasi = htmlspecialchars($data["durasi"]);
    $sutradara = htmlspecialchars($data["sutradara"]);
    $pemeran = htmlspecialchars($data["pemeran"]);
    $poster = htmlspecialchars($data["poster"]);
    $sinopsis = htmlspecialchars($data["sinopsis"]);

    $query = "UPDATE film SET 
              judul = '$judul',
              genre = '$genre',
              durasi = '$durasi',
              sutradara = '$sutradara',
              pemeran = '$pemeran',
              poster = '$poster',
              sinopsis = '$sinopsis'
              WHERE id = '$id'
              ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM film WHERE
            judul LIKE '%$keyword%' OR
            genre LIKE '%$keyword%'OR
            durasi LIKE '%$keyword%'OR
            sutradara LIKE '%$keyword%'OR
            pemeran LIKE '%$keyword%'OR
            sinopsis LIKE '%$keyword%'
            ";
    return query($query);
}
?>



