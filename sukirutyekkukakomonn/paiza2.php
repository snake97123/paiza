<?php
    $inputs = explode(" ", trim(fgets(STDIN)));
    $n = $inputs[0];
    $k = $inputs[1];

    $visitor_number = explode(" ", trim(fgets(STDIN)));
    
    // for ($i = 0; $i < $n -$k + 1; $i++) {
    //      print $visitor_number[$i] . "\n";
    // }
    
    //キャンペーンの各区間の平均値
    $average = [];
    
    for ($i = 0; $i < $n - $k + 1; $i++) {
       
         $i_avarage = 0;
         for ($j = 0; $j < $k; $j++) {
              $i_avarage += $visitor_number[$i + $j];
             
         }
          array_push($average, $i_avarage / $k);
    }
    // print_r($average);
    $max = max($average);
    $max_count = 0;
    foreach ($average as $value) {
        if($value == $max){
            $max_count++;
        }
    }
    $first_day = array_search($max, $average) + 1;
 
    
    echo $max_count . " " . $first_day;
?>
