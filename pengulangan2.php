<?php
require 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PWPB</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body >
   <nav>
        <ul>
            <li><img src="img/home.png" alt="home" style="width: 23px; vertical-align: bottom;"><a href="index.php">Beranda</a></li>
            <li><img src="img/cabang.png" alt="cabang"><a href="percabangan.php">Percabangan</a></li>
            <li class="aktif"><img src="img/ulang.png" alt="ulang"><a href="pengulangan.php">Pengulangan</a></li>
            <li><img src="img/array.png" alt="array"><a href="array.php">Array</a></li>
            <li><img src="img/func.png" alt="func" style="width: 22px; vertical-align: bottom;"><a href="function.php">Function</a></li>
            <li><img src="img/arit.png" alt="arit" style="width: 20px; vertical-align: bottom;"><a href="aritmatika.php">Oprasi Aritmatika dan logika</a></li>
        </ul>
   </nav>
   <main>
       <div class="judul">
           <span>Pengulangan</span>
       </div>
       <div class="isi">
           <ul>
                <?php for($i = 1; $i <= $bsh; $i++) : ?>
                    <li class=bunshin>
                        <img src="img/naruto.png" alt="naruto">
                        <figcaption>Bunshin ke <?=$i?></figcaption>
                    </li>
               <?php endfor; ?>
           </ul>
       </div>
   </main>
<script src="js/particles.js"></script>
<script src="js/script.js"></script>
</body>
</html>