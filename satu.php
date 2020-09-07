<?php
   function perkalian($a, $b)
   {
      return $a * $b;
   }

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

   <?php
      if (isset($_POST['proses'])) {
         $input1 = $_POST['val1'];
         $input2 = $_POST['val2'];
         
         echo perkalian($input1, $input2);
      }
   ?>
</body>
</html>