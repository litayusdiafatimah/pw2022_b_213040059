<?php 
// SUPERGLOBALS
// Variabel bawaan PHP yang bisa diakses di mana pun
// bentuknya array associative
// $_GET
// $_POST
// $_SERVER
// $_GET = ["nama" => "lita", "email" => "litayusdiaf123@gmail.com"];
// $_GET["nama"] = "lita yusdia";
// $_GET["email"] = "litayusdiaf@gmail.com";

// var_dump($_GET);
?>

<!-- <h1>Halo, <?= $_GET["nama"]; ?></h1> -->

<ul>
    <li>
        <a href="kuliah_latihan2.php?nama=litayusdia&npm=213040059&email=litayusdiaf@gmail.com">litayusdia</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=putriauliam&npm=213040055&email=putriauliam@gmail.com">putrialiam</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=rahmaaliap&npm=213040047&email=rahmaaliap@gmail.com">rahmaaliap</a>
    </li>
</ul>