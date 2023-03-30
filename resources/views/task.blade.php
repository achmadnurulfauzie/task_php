<!DOCTYPE html>
<html>
<head>
	<title>Task PHP</title>
</head>
<body>
<h1><center>Soal</center></h1>
	<p>Cetaklah angka baris demi baris dari 1 hingga 100.</p>
	<p>Untuk angka kelipatan 3 memanggil function luas lingkaran dengan jari-jari dari angka tersebut dibagi 3 dan mencetak hasil luasnya.</p>
	<p>Untuk kelipatan 5 memanggil function keliling lingkaran dengan jari-jari dari angka tersebut dibagi 5 dan mencetak hasil kelilingnya, apabila angka tersebut kelipatan 3 dan 5 maka memanggil function luas persegi dengan panjang angka tersebut dibagi 3 dan lebar angka tersebut dibagi 5.</p>
	<p>Semua angka menggunakan 2 angka dibelakang koma. Note: nilai pi = 3.14</p>
	<p>Contoh:</p>
	<pre>
1.00
2.00
3.14
...
100.00
	</pre>
</body>
<h1><center>Hasil Output Program</center></h1>
<?php
// function untuk menghitung luas lingkaran
function hitung_luas_lingkaran($r)
{
    $luas = 3.14 * $r * $r;
    return number_format($luas, 2); // mengembalikan nilai luas dengan 2 angka di belakang koma
}

// function untuk menghitung keliling lingkaran
function hitung_keliling_lingkaran($r)
{
    $keliling = 2 * 3.14 * $r;
    return number_format($keliling, 2); // mengembalikan nilai keliling dengan 2 angka di belakang koma
}

// function untuk menghitung luas persegi
function hitung_luas_persegi($panjang, $lebar)
{
    $luas = $panjang * $lebar;
    return number_format($luas, 2); // mengembalikan nilai luas dengan 2 angka di belakang koma
}

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        // jika angka merupakan kelipatan 3 dan 5
        $luas_persegi = hitung_luas_persegi($i / 3, $i / 5);
        echo $luas_persegi . "<br>";
    } elseif ($i % 3 == 0) {
        // jika angka merupakan kelipatan 3
        $luas_lingkaran = hitung_luas_lingkaran($i / 3);
        echo $luas_lingkaran . "<br>";
    } elseif ($i % 5 == 0) {
        // jika angka merupakan kelipatan 5
        $keliling_lingkaran = hitung_keliling_lingkaran($i / 5);
        echo $keliling_lingkaran . "<br>";
    } else {
        // jika angka bukan kelipatan 3 atau 5
        echo number_format($i, 2) . "<br>";
    }
}
?>


</body>
</html>
