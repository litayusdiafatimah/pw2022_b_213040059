<?php
require 'functions.php';
// cek apakah tombol tambah sudah diklik
if (isset($_POST["tambah"])) {

    if(tambah($_POST) > 0) {
        echo "<script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'tables.php';
        </script>";
    } else {
      echo "
          <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'tables.php';
          </script>
      ";
    }
}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah Data Film</title>
  </head>
  <body>
    
    <div class="container">
        <h1>Tambah data film</h1>

        <a href="tables.php">Kembali Ke Daftar Film</a>

        <div class="row mt-3">
            <div class="col-8">
            
                <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                    </div>
                    <div class="mb-3">
                        <label for="genre" class="form-label">Genre</label>
                        <input type="text" class="form-control" id="genre" name="genre" required>
                    </div>
                    <div class="mb-3">
                        <label for="durasi" class="form-label">Durasi</label>
                        <input type="text" class="form-control" id="durasi" name="durasi">
                    </div>
                    <div class="mb-3">
                        <label for="sutradara" class="form-label">Sutradara</label>
                        <input type="text" class="form-control" id="sutradara" name="sutradara">
                    </div>
                    <div class="mb-3">
                        <label for="pemeran" class="form-label">Pemeran</label>
                        <input type="text" class="form-control" id="pemeran" name="pemeran">
                    </div>
                    <div class="mb-3">
                        <label for="poster" class="form-label">Poster</label>
                        <input type="file" class="form-control" id="poster" name="poster">
                    </div>
                    <div class="mb-3">
                        <label for="sinopsis" class="form-label">Sinopsis</label>
                        <input type="text" class="form-control" id="sinopsis" name="sinopsis">
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary">Tambah Data Film</button>
                </form>
            </div>
        </div>
        
        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>





