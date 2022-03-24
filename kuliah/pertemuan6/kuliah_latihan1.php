<?php
// array associative
// array yang indexnya berupa string, yang berassosiasi dengan nilainya
$mahasiswa = [
[
    "nama" => "Lita Yusdia Fatimah",
    "npm" => "213040059",
    "email" => "Litayusdiaf123@gmail.com",
    "jurusan" => "Teknik Informatika"],
[
    "nama" => "Putri Aulia Maulidina", 
    "npm" => "213040055", 
    "email" => "putrialiam@gmail.com", 
    "jurusan" => "Teknik Informatika"],
[
    "nama" => "Rahma Aliaputri Effendi", 
    "npm" => "213040047", 
    "email" => "rahmaalia@gmail.com", 
    "jurusan" => "Teknik Informatika"],
[
    "nama" => "Emilia Paradila", 
    "npm" => "213040043", 
    "email" => "emiliaparadilas@gmail.com", 
    "jurusan" => "Teknik Informatika"],

];

// var_dump($mahasiswa[1]["Email"]);
?>
<?php ?>

<?php foreach($mahasiswa as $mhs)  { ?>
<ul>
    <li>Nama: <?php echo $mhs["nama"] ?></li>
    <li>NPM: <?php echo $mhs["npm"] ?></li>
    <li>Email: <?php echo $mhs["email"] ?></li>
    <li>Jurusan: <?php echo $mhs["jurusan"]?></li>
</ul>
<?php } ?>


