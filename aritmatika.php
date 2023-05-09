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
		$namabarang = 'Kaos Olahraga';
        $hargabeli = 30000 ;
        $hargajual = 40000 ;
        $pajak = 0.1 ;
        $jumlahbarang = 5;
        $totalbeli = $hargabeli * $jumlahbarang ;
        $totaljual = $hargajual * $jumlahbarang ;
        $labakotor = $totaljual - $totalbeli;
        $lababersih = $labakotor * (1-$pajak);

        echo "Nama Barang= " . $namabarang . "<br>";
        echo "Total Pembelian= " . number_format ($totalbeli) . "<br>";
        echo "Total Penjualan= " . number_format ($totaljual) . "<br>";
        echo "Laba Kotor= " . number_format ($labakotor) . "<br>";
        echo "Laba Bersih= " . number_format ($lababersih) . "<br>";
	?>
</body>
</html>