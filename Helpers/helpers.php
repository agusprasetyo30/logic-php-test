<?php
   // Soal Nomer 2
   if (!function_exists('hitungTahun')) {
      /**
       * Fungsi untuk menghitung jumlah penduduk pertahun
       *
       * @param [type] $penduduk
       * @param [type] $jumlah_kalkulasi
       * @return integer
       */
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
   }
?>