<?php
   // file satu.php
   
   // Soal 1
   // Memperbaiki contoh fungsi pada soal

   function perkalian($a, $b)
   {
      return $a * $b;
   }

   // Contoh Statis
   // echo perkalian(4, 10);
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Soal Nomer 1</title>
   </head>
   <body>
      <form method="post">
         <input type="text" name="val1" value="<?= $_POST['val1'] ?>">
         x
         <input type="text" name="val2" value="<?= $_POST['val2'] ?>">
         <input type="submit" value="Proses"  name="proses">
      </form>

      <br>

      <?php
         // Keadaan ketika tombol proses ditekan
         if (isset($_POST['proses'])) {
            $input1 = $_POST['val1'];
            $input2 = $_POST['val2'];
            
            // Contoh Dinamis
            echo perkalian($input1, $input2);
         }
      ?>
   </body>
</html>