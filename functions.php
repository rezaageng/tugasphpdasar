<?php
// percabangan

if (isset($_GET['p'])) {
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
}

//pengulangan

if (isset($_GET["bunshin"])) {
    $bsh = $_GET["bunshin"];
}

//array

$anime = [
    [
        "nama" => "Shingeki no Kyojin Season 3 Part 2",
        "studio" => "Wit Studio",
        "tayang" => "Apr 29, 2019 to Jul 1, 2019",
        "eps" => "10",
        "img" => "snk.jpg",
        "gaman" => "titan.jpg"
    ],
    [
        "nama" => "Ansatsu Kyoushitsu 2nd Season",
        "studio" => "Lerche",
        "tayang" => "Jan 8, 2016 to Jul 1, 2016",
        "eps" => "25",
        "img" => "ass.jpg",
        "gaman" => "koro.png"
    ],
    [
        "nama" => "Darling in the FranXX",
        "studio" => "A-1 Pictures, Trigger, CloverWorks",
        "tayang" => "Jan 13, 2018 to Jul 7, 2018",
        "eps" => "24",
        "img" => "dar.jpg",
        "gaman" => "darling.png"
    ]
];

//function
if (isset($_GET["nama"])) {
    $nama = $_GET["nama"];
}
function salam($nama) {
	$jam = date("H");
	if ($jam >= 10 && $jam < 15) {
		$waktu = "Siang";
	}
	elseif ($jam >= 15 && $jam < 18) {
		$waktu = "Sore";
	}
	elseif ($jam >= 18 && $jam <24) {
		$waktu = "Malam";
	}
	elseif ($jam >= 00 && $jam <04) {
		$waktu = "Malam";
	}
	else {
		$waktu = "Pagi";
	}
	return "Selamat $waktu, $nama :)";
}

//operasi aritmatika dan logika
if (isset($_GET["sisi"])) {
    $s = $_GET["sisi"];

    $luas = $s * $s;

    $mod = ($luas % 2 == 0) ? "Genap" : "ganjil" ;
}