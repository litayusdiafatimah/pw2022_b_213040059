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
    $ekstensiPoster = explode('.', $namaFile);
    $ekstensiPoster = strtolower (end($ekstensiPoster));
    if( !in_array($ekstensiPoster, $ekstensiPosterValid) ) {
        echo "<script>
        alert('yang anda upload bukan gambar!');
        </script>";
        return false;
    }

    if( $ukuranFile > 1000000 ) {
        echo "<script>
        alert('ukuran gambar terlalu besar!');
        </script>";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiPoster;

    move_uploaded_file($tmpName, 'img/'. $namaFileBaru);

    return $namaFileBaru;
    
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
    $genre = htmlspecialchars($data["nama_genre"]);
    $durasi = htmlspecialchars($data["durasi"]);
    $sutradara = htmlspecialchars($data["sutradara"]);
    $pemeran = htmlspecialchars($data["pemeran"]);
    $posterLama = htmlspecialchars($data["posterLama"]);
    if( $_FILES['poster']['error'] === 4) {
        $poster = $posterLama;
    } else {
        $poster = upload();
        if(!$poster) {
            return false;
        }
    }
    // upload poster
    
    // $poster = htmlspecialchars($data["poster"]);
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


function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username ='$username'");

    if(mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('username sudah terdaftar!')
              </script>";
        return false;
    }

    if( $password !== $password2 ) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
              </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password') ");

    return mysqli_affected_rows($conn);
}
?>



