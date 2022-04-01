<?php 
// Variable Scope / lingkup variabel
// $x = 10;

// function tampilX() {
//     global $x;
//     echo $x;
// }

// tampilX();


// SUPERG GLOBALS
// variable global milik PHP
// merupakan Array Associative
// echo $_SERVER["SERVER_NAME"];

// $_GET

$film = [
    [
        "judul" => "Mariposa",
        "genre" => "roman/drama",
        "produser" => "Chand Parwez Servia, Frederica",
        "sutradara" => "Fajar Bustomi",
        "durasi" => "1 jam 58 menit",
        "gambar" => "Mariposa.jpg"
    ],
    [
        "judul" => "Dilan 1990",
        "genre" => "roman/drama",
        "produser" => "Ody Mulya Hidayat",
        "sutradara" => "Fajar Bustomi,Pidi Baiq",
        "durasi" => "1 jam 50 menit",
        "gambar" => "Dilan1990.jpg"
    ],
    [
        "judul" => "#Teman Tapi Menikah",
        "genre" => "Drama",
        "produser" => "Frederica",
        "sutradara" => "Rako Prijanto",
        "durasi" => "1 jam 42 menit",
        "gambar" => "TemanTapiMenikah.png"
    ],
    [
        "judul" => "Si Doel The Movie",
        "genre" => "Drama/Anak-anak",
        "produser" =>  "Frederica, HB Naveen",
        "sutradara" => "Rano Karno",
        "durasi" => "1 jam 25 menit",
        "gambar" => "SiDoelthemovie.jpg"
    ],
    
    [
        "judul" => "Sweet 20",
        "genre" => "roman/musikal",
        "produser" => "Chand Parwez Servia, Fiaz Servia, Mithu Nisar, Reza Servia",
        "sutradara" => "Ody C. Harahap",
        "durasi" => "1 jam 50 menit",
        "gambar" => "Sweet20.jpg"
    ],
    [
        "judul" => "Ada Apa Dengan Cinta?",
        "genre" => "roman/drama",
        "produser" => " Mira Lesmana, Riri Riza",
        "sutradara" => "Rudi Soedjarwo",
        "durasi" => "1 ja 52 menit",
        "gambar" => "Adaapadengancinta.jpg"
    ],
    [
        "judul" => "Habibie & Ainun 3",
        "genre" => "roman/drama",
        "produser" => "Manoj Punjabi",
        "sutradara" => "Hanung Bramantyo",
        "durasi" => "2 jam 1 menit",
        "gambar" => "Habibie&Ainun3.jpg"
    ],
    [
        "judul" => "5 cm",
        "genre" => "Petualangan/drama",
        "produser" => "Sunil Soraya, Raam Soraya",
        "sutradara" => "Rizal Mantovani",
        "durasi" => "2 jam 6 menit",
        "gambar" => "5cm.jpg"
    ],
    [
        "judul" => "Milly & Mamet",
        "genre" => "Komedi/drama",
        "produser" => "Mira Lesmana, Chand Parwez Servia, Fiaz Servia",
        "sutradara" => "Ernest Prakasa",
        "durasi" => "1 jam 41 menit",
        "gambar" => "Milly&Mamet.jpg"
    ],
    [
        "judul" => "Single",
        "genre" => "roman/komedi",
        "produser" => "Sunil Soraya",
        "sutradara" => "Raditya Dika",
        "durasi" => "2 jam 7 menit",
        "gambar" => "Single.jpg"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<h1>Daftar Film</h1>
<ul>
<?php foreach($film as $f) : ?>
    <li>
        <a href="latihan2.php?judul=<?= $f["judul"]; ?>&genre= <?= $f["genre"]; ?>&produser=<?= $f["produser"]; ?>&sutradara=<?= $f["sutradara"]; ?>&durasi=<?= $f["durasi"]; ?>&gambar=<?= $f["gambar"]; ?>"><?= $f["judul"]; ?></a>
    </li>
    
    <?php endforeach; ?>
    </ul>
    
</body>
</html>