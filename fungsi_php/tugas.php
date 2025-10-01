<?php

// Menentukan 2 bilangan yang ada mencari bilangan terbesar
function terbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } elseif ($b > $a) {
        return $b;
    } else {
        return "Kedua bilangan sama";
    }
}
// Pemanggilan fungsi
echo "Bilangan terbesar antara 100 dan 150 adalah: " . terbesar(100, 150);
echo "<br />";

// Mendapatkan informasi tanggal dan waktu saat ini
$tanggal = getdate();
// Menampilkan tanggal, bulan, dan tahun sekarang dengan format dd-mm-yyyy
echo "<br />";
echo "Tanggal sekarang: " . $tanggal['mday'] . "-" . $tanggal['mon'] . "-" . $tanggal['year'];

echo "<br />";
echo "Tanggal sekarang: " . date("d-m-Y");

?>