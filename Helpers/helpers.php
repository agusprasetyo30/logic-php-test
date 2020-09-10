<?php
   ini_set("display_errors", 0);

   // Helper untuk Soal Nomer 2
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

   // File Helpers/helpers.php
   // Helper untuk Soal Nomer 3
   if (!function_exists('terpecah')) {
      /**
      * Fungsi yang berfungsi untuk memproses dan menampilkan angka sesuai jumlahnya
      *
      * @param integer $nilai
      * @return void
      */
      function terpecah(int $nilai)
      {
         // Menghitung huruf yang mengandung kata 0
         $hitung_jumlah_0 = substr_count($nilai, 0);

         // Menampung jumlah nilai yang diinputkan dan dikurangi angka 0 yang ditentukan
         $jumlah_nilai = strlen($nilai) - $hitung_jumlah_0;

         // Melakukan perulangan untuk mengambil angka dan menambahkan angka 0
         while ($jumlah_nilai > 0) {

            if ($nilai < 10) { // satuan
               echo $nilai . "<br>";
               
            } else if ($nilai < 100) { // puluhan
               echo substr($nilai, 0, 1) . "0" . "<br>";
               $nilai = $nilai % 10;
               
            } else if ($nilai < 1000) { // ratusan
               echo substr($nilai, 0, 1) . "00" . "<br>";
               $nilai = $nilai % 100;

            } else if ($nilai < 10000) { // ribuan
               echo substr($nilai, 0, 1) . "000" . "<br>";
               $nilai = $nilai % 1000;
               
            } else if ($nilai < 100000) { // puluhan ribu
               echo substr($nilai, 0, 1) . "0000" . "<br>";
               $nilai = $nilai % 10000;
               
            } else if ($nilai < 1000000) { // ratusan ribu
               echo substr($nilai, 0, 1) . "00000" . "<br>";
               $nilai = $nilai % 100000;
               
            } else if ($nilai < 10000000) { // juta
               echo substr($nilai, 0, 1) . "000000" . "<br>";
               $nilai = $nilai % 1000000;
               
            } else if ($nilai < 100000000) { // puluhan juta
               echo substr($nilai, 0, 1) . "0000000" . "<br>";
               $nilai = $nilai % 10000000;

            } else if ($nilai < 1000000000) { // ratusan juta
               echo substr($nilai, 0, 1) . "00000000" . "<br>";
               $nilai = $nilai % 100000000;
            }
            $jumlah_nilai--;
         }
      }
   }

   // File Helpers/helpers.php
   // Helper untuk Soal Nomer 4
   if (!function_exists('splitInteger')) {
      /**
       * Digunakan untuk mengambil karakter dari inputan dan merubah menjadi integer
       * Digunakan pada contoh dinamis
       *
       * @param [type] $input
       * @return void
       */
      function splitInteger($input) : array
      {
         $a = [];
         $jml_karakter = strlen($input);

         for ($i=0; $i < $jml_karakter ; $i++) { 
            // Merubah data yang awalnya string menjadi integer
            // Dan memasukan ke dalam array
            array_push($a, (int)str_split($input)[$i]);
         }

         return $a;
      }
   }

   if (!function_exists('checkArray')) {
      
      /**
       * Fungsi ini dgunakan untuk mengecek data array apakah sudah berupa ascending atau belum
       *
       * @param array $data_array
       * @return boolean
       */
      function checkArray(array $data_array) : bool
      {
         // untuk menampung data array sebelum di sorting
         $default = $data_array;

         // Melakukan sort terhadap array yang ditambahkan
         sort($data_array);

         // Di cek apakah data tersebut berbentuk ASCENDING atau tidak
         if ($default == $data_array) {
            return true;

         } else {
            return false;
         }
      }
   }
?>