<?php
// percabangan

$p = $_GET["p"];
$com = rand(1,9);

if ($com < 4) {
    $com = "gunting";
}
elseif ($com >=4 && $com < 7) {
    $com = "batu";
}
else {
    $com = "kertas";
}

$hasil = "";

if ($p == $com) {
    $hasil = "Seri";
}
elseif ($p == "gunting") {
    $hasil = ($com == "kertas") ? "Menang" : "Kalah" ;
}
elseif ($p == "batu") {
    $hasil = ($com == "gunting") ? "Menang" : "Kalah" ;
}
elseif ($p == "kertas") {
    $hasil = ($com == "batu") ? "Menang" : "Kalah" ;
}