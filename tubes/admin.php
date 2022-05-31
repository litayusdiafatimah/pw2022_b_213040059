<?php 
require 'functions.php';
$film = query("SELECT * FROM film");

if (isset ($_POST["cari"]) ) {
    $film = cari($_POST["keyword"]);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Halaman Admin</title>
  </head>
  <body>
  <div class="container">
       <h1>Daftar Film Indonesia</h1>

<a href="tambah.php" class="btn btn-primary">Tambah Data Film Indonesia</a>
<br><br>

<br>
<table border="1" cellpadding="10" cellspacing="0" class="table table-success table-striped text-center" >
    <tr>
        <th>No.</th>
        <th>Poster</th>
        <th>Judul</th>
        <th>Genre</th>
        <th>Durasi</th>
        <th>Sutradara</th>
        <th>Pemeran</th>
        <th>Sinopsis</th>
        <th>Aksi</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach( $film as $row): ?>
    <tr>
        <td><?= $i; ?></td>
        <td><img src="img/<?php echo $row["poster"]; ?>" class="img-thumbnail" width="300"></td>
        <td><?= $row["judul"]; ?></td>
        <td><?= $row["genre"]; ?></td>
        <td><?= $row["durasi"]; ?></td>
        <td><?= $row["sutradara"]; ?></td>
        <td><?= $row["pemeran"]; ?></td>
        <td><?= $row["sinopsis"]; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]?>" class="btn badge bg-warning">Ubah</a>
            <a href="hapus.php?id=<?= $row["id"]?>" class="btn badge bg-danger" onclick="return confirm('yakin?');">Hapus</a>
        </td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
