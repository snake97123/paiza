<?php
 $inputs = explode(" ", trim(fgets(STDIN)));
 $H = $inputs[0];
 $W = $inputs[1];
 $Y = $inputs[2];
 $X = $inputs[3];
 $arrays = array();
 
 for($i = 0; $i < $H; $i++){
     for($j = 0; $j < $W; $j++){
         $arrays[$i][$j] = ".";
     }

 }
//  print_r($arrays);
 $arrays[$Y][$X] = "!";
//  print_r($arrays);
for($i = 0; $i < $H - $X; $i++){
    if($arrays[$Y + $i][$X + $i] == "."){
    $arrays[$Y + $i][$X + $i] = "*";
    }
}
for($i = 0; $i <= $H - $X; $i++){
    if($arrays[$Y - $i][$X - $i] == "."){
    $arrays[$Y - $i][$X - $i] = "*";
    }
}
for($i = 0; $i < $H - $X; $i++){
    if($arrays[$Y + $i][$X - $i] == "."){
    $arrays[$Y + $i][$X - $i] = "*";
    }
}
for($i = 0; $i < $H - $X; $i++){
    if($arrays[$Y - $i][$X + $i] == "."){
    $arrays[$Y - $i][$X + $i] = "*";
    }
}
// print_r($arrays);
foreach ($arrays as $values) {
    foreach($values as $value){
        echo $value;
    }
    echo "\n";
}
 
 
 
?>