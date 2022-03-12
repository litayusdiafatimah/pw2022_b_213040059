<?php
$mahasiswa = [
["Lita Yusdia Fatimah", "213040059", "Litayusdiaf123@gmail.com", "Teknik Informatika"],
["Putri Aulia Maulidina", "213040055", "putrialiam@gmail.com", "Teknik Informatika"],
["Rahma Aliaputri Effendi", "213040047", "rahmaalia@gmail.com", "Teknik Informatika"],
["Emilia Paradila", "213040043", "emiliaparadilas@gmail.com", "Teknik Informatika"],
]
?>

<?php foreach($mahasiswa as $mhs)  { ?>
<ul>
    <li>Nama: <?php echo $mhs[0] ?></li>
    <li>NPM: <?php echo $mhs[1] ?></li>
    <li>Email: <?php echo $mhs[2] ?></li>
    <li>Jurusan: <?php echo $mhs[3]?></li>
</ul>
<?php } ?>