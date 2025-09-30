<?php

echo "CONTOH FOR dari 100 sampai 1000 <br>";
 for($i = 100; $i <= 1000; $i++) { 

    echo "Looping FOR ke : ".$i."<br>";

    if($i % 10 == 0) {
         echo "<br />";
    }
} 

?>
<!-- // Kasus Perulangan (Looping)

// Looping dipakai kalau kita butuh mengulang sebuah proses berkali-kali tanpa nulis kode berulang-ulang.
// Contoh kasus nyata:

// 1. Menampilkan data dari database → misalnya daftar produk di toko online.

// 2.  Mengirim email ke banyak orang → looping daftar email lalu kirim satu-satu.

// 3. Menghitung deret angka → seperti contoh tadi dari 100 sampai 1000.

// 4. Membaca file baris demi baris → misalnya log server.

// 5. Membuat tampilan tabel → tiap baris data diulang.


// Kasus Kontrol (if/else, break, continue, switch)

// Kontrol dipakai untuk mengambil keputusan atau mengatur jalannya perulangan.
// Contoh kasus nyata:

// 1. Login user → if password benar lanjut masuk, kalau salah tampilkan pesan error.

// 2. Filter data → skip (pakai continue) data yang tidak sesuai kriteria.

// 3. Stop proses → kalau kondisi tertentu ketemu, pakai break untuk hentikan loop.

// 4. Pilihan menu → switch case untuk menentukan aksi sesuai input user. -->

<!-- // Validasi input → misalnya hanya menerima angka positif. -->
