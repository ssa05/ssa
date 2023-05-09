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
		$angka_pertama = 198;
		$angka_kedua = 134;
		$angka_ketiga = 76;
		$jumlah = $angka_pertama + $angka_kedua + $angka_ketiga;
		$teks = '<br>Ketiga variabel, ketika dijumlah menjadi= ';
		
		echo "Angka pertama= " . $angka_pertama;
		echo "<br> Angka kedua= " . $angka_kedua;
		echo "<br> Angka ketiga= " . $angka_ketiga;
		echo ($teks . $jumlah);
	?>
</body>
</html>