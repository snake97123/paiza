<?php
   $n = trim(fgets(STDIN));
   $array = array();
      for ($i = 0; $i < $n; $i++) {
            $order = explode(" ", trim(fgets(STDIN)));
            if ($order[0] == 'in') {
                array_push($array, $order[1]);
                //配列がからかどうかの判定
            }elseif($order[0] == 'out'){
               if(count($array) != 0){
                   array_splice($array, 0, 1);
               }  
            }
      }
    foreach ($array as $value) {
          echo $value . "\n";
    }
     
   
?>