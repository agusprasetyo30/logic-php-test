<?php
   // file tiga.php

   // Soal 3
   // Menjabarkan angka yang sudah diinputkan menjadi ribuan, ratusan, puluhan dll

   // Memanggil helpers
   include "./Helpers/helpers.php";

   // Contoh Statis
   // echo terpecah(1234567);
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Soal Nomer 3</title>
   </head>
   <body>
      <form method="post">
         <label for="value1">Masukan Angka</label>
         <input type="text" name="value1" id="value1" value="<?= $_POST['value1'] ?>">
         <input type="submit" name="proses" value="Proses">
      </form>
      <br>
      <?php
         // Keadaan ketika tombol proses ditekan
         if (isset($_POST['proses'])) {
            $value1 = $_POST['value1'];
            
            // Contoh Dinamis
            echo terpecah($value1);
         }
      ?>
   </body>
</html>