<?php
   $n = trim(fgets(STDIN));
   
   $array1 = explode(" ", trim(fgets(STDIN)));
   $array2 = explode(" ", trim(fgets(STDIN)));
   $count = 1;
   
   $new_array = array_merge($array1, $array2);
   
   $result = array_unique($new_array);
   sort($result);
   foreach ($result as $value) {
      if ($count < count($result)) {
          echo $value . " ";
          $count++;
      } elseif($count == count($result)){
          echo $value;
          
      }
   }
?>