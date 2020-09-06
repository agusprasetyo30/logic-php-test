<?php
   ini_set("display_errors", 1);

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

   
   $arr_1 = [1, 4, 3, 2, 6, 10];
   $arr_2 = [2, 4, 6, 8, 10, 12, 13];
   $arr_3 = [3, 2, 1, 5, 6];
   $arr_4 = [11, 12, 13, 14, 15];

   var_dump(checkArray($arr_4));
?>