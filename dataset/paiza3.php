<?php
   $input = explode(" ", trim(fgets(STDIN)));
   $n = $input[0];
   $m = $input[1];
   
   $array = [];
   
   for ($i = 0; $i < $n; $i++) {
        $array_element = trim(fgets(STDIN));
        
        array_push($array, $array_element);
   }
//   print_r($array);
   
   for ($i = 0; $i < $m; $i++) {
        $search_element = trim(fgets(STDIN));
        $key = array_search($search_element, $array);
       
        if($key || $key === 0){
            echo $key + 1 . "\n";
        } else {
            echo -1 . "\n";
        }
        
   }
?>
