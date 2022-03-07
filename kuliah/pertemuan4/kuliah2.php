<?php
// definisikan masing-masing sisi kubus
$a = 9;
$b = 4;

// hitung masing-masing
$volume_a = pow($a, 3); //a pangkat 3
$volume_b = pow($b, 3); //b pangkat 3

// hitung total 2 volume
$total = $volume_a + $volume_b;

// kembalikan nilai total
echo "Jumlah dari volume kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total";

echo"<hr>";

// deklarasi / definisi function
function totalVolumeDuaKubus($a, $b) {
    // $volume_a = pow($a, 3); //a pangkat 3
    // $volume_b = pow($b, 3); //b pangkat 3

    // $total = $volume_a + $volume_b;
    $total = pow($a, 3) + pow($b, 3); //disederhanakan / direfactoring

    return "Jumlah dari volume kubus dengan sisi $a dan kubus dengan sisi $b adalah $total";
}

// pemanggilan / eksekusi function
echo totalVolumeDuaKubus(9,4);
echo"<br>";
echo totalVolumeDuaKubus(10,20);
echo"<br>";
echo totalVolumeDuaKubus(5,6);

// buat sebuah fungsi untuk menghitung luas segitiga dengan alas 2 dan tinggi 4


// echo luasSegiTiga(2,4); //4
function luasSegiTiga ($alas, $tinggi) {
    
    $luas = 0.5 * $alas * $tinggi;

    return "luas segitiga dengan alas $alas dan tinggi $tinggi adalas $luas";
}

echo luasSegiTiga(2,4);


?>