


<!-- ini contoh sederhana pada diskon penjualan -->
<?php

$total_belanja = 120000;

if ($total_belanja >=100000){
    $diskon = 0.2 * $total_belanja;
}else{
    $diskon = 0;
}

echo "total belanja = $total_belanja <br>";
echo "diskon = $diskon <br>";
echo "total bayar = " .($total_belanja - $diskon);

?>