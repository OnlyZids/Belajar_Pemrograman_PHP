


<!-- Ini contoh sederhana kalo memiliki role akses berbeda seperti user & admin -->

<?php

$username = "wais";
$role = "user";

if ($username == "wais" && $role == "admin"){
    echo "Selamat datang Admin $username, anda memiliki akses penuh";
}else{
    echo "Selamat datang $username, anda memiliki akses terbatas";
}

?>