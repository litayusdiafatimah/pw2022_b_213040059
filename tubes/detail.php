<?php 

require 'functions.php';
// mendapatkan id film dari url
$id = $_GET["id"];
$film = query("SELECT * FROM film join genre on genre.id_genre = film.genre WHERE id = $id");
 
// tombol cari ditekan
if( isset($_POST["cari"]) ) {
  $film = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #243A73">
      <div class="container">
        <a class="navbar-brand" href="#" Blaka><strong>Lita ysdf</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Film</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registrasi.php">Daftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Masuk</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="kontent">
    <div class="container">
    <h1>Details</h1>

       <div class="row">
       <?php foreach($film as $f) :?>
           <div class="col-md-6 text-center ">
               <img src="img/<?php echo $f["poster"]; ?>"alt="" class="img-responsive mt-5" width="200" height="auto">
           </div>

          
        <div class="col-md-6">
            <h2><?php echo $f["judul"] ?></h2>

            <h5 class="mt-5">Genre :</h5>
            <h5 class="d-inline rounded-pill p-1 "><?php echo $f["nama_genre"] ?></h5>
            
            <h5 class="mt-5">Durasi :</h5>
            <h5 ><?php echo $f["durasi"] ?></h5>
            
            <h5 class="mt-5">Sutradara :</h5>
            <h5><?php echo $f["sutradara"] ?></h5>

            <h5 class="mt-5">Pemeran :</h5>
            <h5><?php echo $f["pemeran"] ?></h5>

            <h5 class="mt-5">Sinopsis :</h5>
            <h5><?php echo $f["sinopsis"] ?></h5>
            <?php endforeach; ?>
            
            

            <form method="post">
                <div class="form-grup">
                    <div class="input-group">
                    </div>
                </div>

            </form>
        </div>
       </div>
    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>