<?php
   // Soal 3
   // Menjabarkan angka yang sudah diinputkan menjadi ribuan, ratusan, puluhan dll

   ini_set("display_errors", 1);

   // Memanggil helpers
   include "./Helpers/helpers.php";

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
      <label for="input1">Masukan Angka</label>
      <input type="text" name="input1" id="input1">
      <input type="submit" name="proses" value="Proses">
   </form>
   <br>
   <?php
      if (isset($_POST['proses'])) {
         $input1 = $_POST['input1'];
         
         echo terpecah($input1);
      }
   ?>
</body>
</html>