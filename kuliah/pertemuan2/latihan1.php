<?php
// Pertemuan 2, belajar sintaks PHP

// NILAI
// angka (integer), tulisan (string), true/false (boolean)
echo 10; //integer
echo '<br>';
echo 'lita'; //string
echo '<br>';
echo  false;  //boolean null
echo '<hr>';

// VARIABEL
// Tempat menampung NILAI
// Awali dengan tanda $, namanya bebas
// boleh mengandung angka, tidak boleh diawali angka
$nama_depan = 'Lita';
echo $nama_depan;
echo '<hr>';

// STRING
// '', ""
$hari = "Jum'at";
echo $hari;
echo "<br>";
echo 'Lita : "hallo, semua!" ' ;
echo '<br>';
// Escape Character
// \
echo 'Lita : "Selamat hari jum\'at"';
echo '<br>';
echo "Lita : \"Selamat hari jum'at\"";
echo '<br>';
// Interpolasi
// Mencetak langsung isi variabel
// hanya bisa oleh ""
echo "Halo, nama saya $nama_depan";
echo '<br>';
echo 'Halo, nama saya $nama_depan';
echo '<hr>';

// Concat / Penggabung String
// 
$nama_depan = 'Lita';
$nama_belakang = 'Yusdia';
echo $nama_depan . " " . $nama_belakang;
echo '<br>';
echo 'Lita: "selamat' . " hari Jum'at\"";
echo '<hr>';

// operator
// Aritmatika
// +, -, x, % (modulo / modulus / sisa bagi) /
echo 1 + 1; // Hasil dari 1+1 adalah 2;
echo "<br>";
echo 'hasil 1 + 1 adalah ' . 1+1;
echo '<br>';
echo (1 + 2) * 3 - 4; // KaBaTaKu 
echo '<br>';
echo 10 % 5;
echo '<br>';
echo 1 + "1" + 1;
echo '<hr>';

// perbandingan
// <, >, <=, >=, ==, !=
echo 1 < 5;
echo '<br>';
echo 1 == 1;
echo '<hr>';

//identitas / Strict Comparison
// ===, !==
echo 1 === "1";
echo '<hr>';


// Increment / Decrement
// tambah / kurang 1
//  ++, --
$x = 10;
echo ++$x;
echo '<br>';
echo $x++;
echo '<hr>';



?>