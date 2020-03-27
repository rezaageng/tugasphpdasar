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
            <li><img src="img/ulang.png" alt="ulang"><a href="pengulangan.php">Pengulangan</a></li>
            <li class="aktif"><img src="img/array.png" alt="array"><a href="array.php">Array</a></li>
            <li><img src="img/func.png" alt="func" style="width: 22px; vertical-align: bottom;"><a href="function.php">Function</a></li>
            <li><img src="img/arit.png" alt="arit" style="width: 20px; vertical-align: bottom;"><a href="aritmatika.php">Oprasi Aritmatika dan logika</a></li>
        </ul>
   </nav>
   <aside>
       <div class="judul">
           <span>Info</span>
       </div>
       <div class="isi">
           <div>
           <ul>
                <li><img src="img/<?php echo $_GET["img"]; ?>" alt="cover"></li>
                <li>Nama : <?php echo $_GET["nama"]; ?></li>
                <li>Studio : <?php echo $_GET["studio"]; ?></li>
                <li>Penayangan : <?php echo $_GET["tayang"]; ?></li>
                <li>Episode : <?php echo $_GET["eps"]; ?></li>
           </ul>
           </div>
       </div>
   </aside>
   <main class="gaman">
       <div class="judul">
           <span>Foto</span>
       </div>
       <div class="isi">
           <ul>
                <li><img src="img/<?php echo $_GET["gaman"]; ?>" alt="cover"></li>
           </ul>
       </div>
   </main>
<script src="js/particles.js"></script>
<script src="js/script.js"></script>
</body>
</html>