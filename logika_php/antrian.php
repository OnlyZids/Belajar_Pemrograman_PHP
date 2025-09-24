

<?php
$nomorAntrian = 15;

        if ($nomorAntrian <= 10) {
            echo "Silakan tunggu, antrian Anda segera dipanggil.";
        } elseif ($nomorAntrian <= 20) {
            echo "Antrian masih agak panjang, mohon bersabar.";
        } else {
            echo "Antrian penuh, silakan datang kembali.";
        }

?>