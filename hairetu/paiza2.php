<?php
   $input = explode(" ", trim(fgets(STDIN)));
   $n = $input[0];
   $m = $input[1];
   
   $array = [];
   for ($i = 0; $i < $n; $i++) {
        $array_element = trim(fgets(STDIN));
        
        array_push($array, $array_element);
   }
   
   for ($i = 0; $i < $m; $i++) {
        $search_element = trim(fgets(STDIN));
        // $key = array_search($search_element, $array);
        
        if (in_array($search_element, $array)) {
            // echo -1 . "\n";
            $key = array_keys($array, $search_element);
            echo  $key + 1 . "\n";
        } else { 
            // echo $key + 1 . "\n";
            echo -1 . "\n";
        }
   }
?>