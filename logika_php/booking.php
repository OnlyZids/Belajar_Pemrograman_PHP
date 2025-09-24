

<!-- ini contoh sederhana pada sistem booking tempat -->

<?php

$status_tempat = "dibooking";

    if ($status_tempat == "kosong"){
        echo "Tempat tersedia";
    }elseif ($status_tempat == "dibooking"){
        echo "Tempat telah dibooking";
    }else{
        echo "Tempat tidak tersedia";
    }

?>