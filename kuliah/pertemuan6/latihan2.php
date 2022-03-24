<?php 
// $mahasiswa = [
//     ["Lita Yusdia Fatimah", "213040059", "litayusdiaf123@gmail.com", "Teknik Informatika"],
//     ["213040047", "Rahma Aliaputri", "rahmaaliap@gmail.com", "Teknik Informatika"]
//     ];

// array associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nrp" => "213040059",
        "nama" => "Lita yusdia fatimah",
        "email" => "litayusdiaf123@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "gbr1.png"
    ],
    [
        "nama" => "Rahma Aliaputri",
        "nrp" => "213040047",
        "email" => "rahmaaliap@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "gbr2.png"
    ]
];
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Daftar Mahasiswa</title>
 </head>
 <body>
     <h1>Daftar Mahasiswa</h1>

     <?php foreach($mahasiswa as $mhs) :?>
     <ul>
         <li>
             <img src="img/<?=$mhs["gambar"]; ?>">
         </li>
         <li>Nama :<?php echo $mhs["nama"]; ?></li>
         <li>NPM :<?php echo $mhs["nrp"]; ?></li>
         <li>Email :<?php echo $mhs["email"]; ?></li>
         <li>Jurusan :<?php echo $mhs["jurusan"]; ?></li>
     </ul>
     <?php endforeach ; ?>
 </body>
 </html>