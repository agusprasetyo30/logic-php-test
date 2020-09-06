<?php
   ini_set("display_errors", 1);

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


   echo terpecah(1234567);
?>