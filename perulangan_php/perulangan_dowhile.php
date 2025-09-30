<?php

echo "CONTOH WHILE <br>"; 
$y = 100;
do{
    echo "Looping Do Wihle Ke : $y <br>";

    if($y % 10 == 0) {
        echo "<br />";
    }
    $y++;
}while($y <= 1000);

?>