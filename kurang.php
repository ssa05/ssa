<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Penjumlahan</title>
</head>
<body>
	<?php
		$angka_pertama = 15;
		$angka_kedua = 45;
		$angka_ketiga = 100;
		$jumlah = $angka_pertama + $angka_kedua;
        $hasil = $jumlah - $angka_ketiga;
		$teks1 = '<br>Hasil dari ';
        $teks2 = ' adalah= ';
		
		echo "Angka pertama= " . $angka_pertama;
		echo "<br> Angka kedua= " . $angka_kedua;
		echo "<br> Angka ketiga= " . $angka_ketiga;
		echo ($teks1 . $angka_pertama . " + " . $angka_kedua . $teks2 . $jumlah);
        echo ($teks1 . $jumlah . " - " . $angka_ketiga . $teks2 . $hasil);
	?>
</body>
</html>