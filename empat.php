<?php
   // Soal 4
   // Mengecek apakah array yang dimasukan termasuk ascending atau tidak

   // Memanggil helpers
   include "./Helpers/helpers.php";

   // $arr_1 = [1, 4, 3, 2, 6, 10];
   // $arr_2 = [2, 4, 6, 8, 10, 12, 13];
   // $arr_3 = [3, 2, 1, 5, 6];
   // $arr_4 = [11, 12, 13, 14, 15];

   // Contoh Statis
   // var_dump(checkArray($arr_4));
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Soal Nomer 4</title>
   </head>
   <body>
      <form method="post">
         <label for="input1">Masukan angka</label>
         <input type="text" name="value1" id="value1" value="<?= $_POST['value1'] ?>">
         <input type="submit" name="proses" value="Proses">
      </form>
      <br>
      <?php
         // Keadaan ketika tombol proses ditekan
         if (isset($_POST['proses'])) {
            $value1 = splitInteger($_POST['value1']);
      
            // Contoh Dinamis
            var_dump(checkArray($value1));
         }
      ?>
   </body>
</html>