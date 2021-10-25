<?php
// Your code here!
[$n, $m] = explode(" ", trim(fgets(STDIN)));
    $numbers = explode(" ", trim(fgets(STDIN)));
    
    $count = 100000000;
    $start = 0;
    $end = 0;
    
    while(true){
        if($end >= $n - 1){
            break;
        }
        if($numbers[$end + 1] + $numbers[$start] >= $m){
            if ($end - $start + 1 < $count){
                
                $count = $end - $start + 1;
            }
            $start += 1;
        }else{
            $end += 1;
        }
    }
    
    if($count == 100000000){
        $count = -1;
    }
    
    echo $count;
?>
