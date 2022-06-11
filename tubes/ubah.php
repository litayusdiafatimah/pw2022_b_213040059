<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
  }


require 'functions.php';

$id = $_GET["id"];

$data = query(" SELECT * FROM film WHERE id= $id")[0];



if (isset($_POST["ubah"])) {

    if(ubah($_POST) > 0) {
        echo "<script>
        alert('data berhasil diubah!');
        document.location.href = 'tables.php';
        </script>";
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

    <title>Ubah Data Film</title>
  </head>
  <body>
    
    <div class="container">
        <h1>Ubah data film</h1>

        <a href="tables.php">Kembali Ke Daftar Film</a>

        <div class="row mt-3">
            <div class="col-8">
            
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $data["id"]; ?>">
                    <input type="hidden" name="posterLama" value="<?= $data["poster"]; ?>">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" required value="<?= $data["judul"];?>">
                    </div>
                    <!-- <div class="mb-3">
                        <label for="genre" class="form-label">Genre</label>
                        <input type="text" class="form-control" id="genre" name="genre" required value="<?= $data["genre"];?>">
                    </div> -->
                    <div class="mb-3">
                            <label for="genre" class="form-label">Genre</label>
                            <select class="form-select" name="nama_genre" required="" id="genre">
                                <option disabled="" selected="">Pilih Genre</option>
                                <option value="1" <?php if($data['genre'] == "1") { echo "selected";} ?>>Roman</option>
                                <option value="2" <?php if($data['genre'] == "2") { echo "selected";} ?>>Drama</option>
                                <option value="3" <?php if($data['genre'] == "3") { echo "selected";} ?>>Petualangan</option>
                                <option value="4" <?php if($data['genre'] == "4") { echo "selected";} ?>>Anak-anak</option>
                            </select>
                        </div>
                    <div class="mb-3">
                        <label for="durasi" class="form-label">Durasi</label>
                        <input type="text" class="form-control" id="durasi" name="durasi"required value="<?= $data["durasi"];?>">
                    </div>
                    <div class="mb-3">
                        <label for="sutradara" class="form-label">Sutradara</label>
                        <input type="text" class="form-control" id="sutradara" name="sutradara"required value="<?= $data["sutradara"];?>">
                    </div>
                    <div class="mb-3">
                        <label for="pemeran" class="form-label">Pemeran</label>
                        <input type="text" class="form-control" id="pemeran" name="pemeran"required value="<?= $data["pemeran"];?>">
                    </div>
                    <div class="mb-3">
                        <label for="poster" class="form-label">Poster</label> <br>
                        <img src="../tubes/img/<?= $data["poster"]; ?>" width="80"> <br>
                        <input type="file" class="form-control" id="poster" name="poster">
                    </div>
                    <div class="mb-3">
                        <label for="sinopsis" class="form-label">Sinopsis</label>
                        <textarea type="text" class="form-control" id="sinopsis" name="sinopsis"required rows="5"><?php echo htmlspecialchars($data["sinopsis"]); ?></textarea>
                    </div>
                    <button type="submit" name="ubah" class="btn btn-primary">Ubah Data Film</button>
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





