<?php
   // Jumlah penduduk kota 1000
   // Setiap tahun penduduk naik 2%
   // Setiap tahun akan ada 50 penduduk yang tinggal dan menetap di kota
   // Berapa tahun agar jumlah penduduk >= p = 1200 penduduk

   // Fungsi untuk menghitung jumlah pendudu pertahun
   function hitungTahun($penduduk, $jumlah_kalkulasi) : int
   { 
      $jumlah_tahun = 0;

      $status = true;
      while ($status) {
         $penduduk = $penduduk + ($penduduk * 0.02) + 50;
         
         // Mengecek apakah jumlah kalkulasi melebihi penduduk atau tidak
         // jika melebihi maka jumlah tahun akan ditambahkan 1
         if ($jumlah_kalkulasi >= $penduduk) {
            $jumlah_tahun++;

         // Jika kondisi penduduk melebihi jumlah_kalkukasi maka status akan berubah menjadi false
         // Dan jumlah tahun tetap ditambahkan satu 
         // Dikarenakan dalam soal terdapat kondisi jika (Penduduk Lebih besar atau sama dengan)
         // Dalam hal ini code yang dibawah adalah kondisi jika lebih besar
         } else {
            $jumlah_tahun++;
            $status = false;
         }
      }

      return $jumlah_tahun;
   }

   echo hitungTahun(1000, 1200);
?>