<?php

echo "CONTOH FOREACH <br>";

$angka = range(100, 1000);

foreach($angka as $value){

    echo "Looping Foreach ke : $value <br>";

    if($value % 10 == 0) {
        echo "<br />";
    }
}

?>