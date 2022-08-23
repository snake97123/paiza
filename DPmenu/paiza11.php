<?php
    [$n, $a, $b] = explode(" ", trim(fgets(STDIN)));
    $dp = [];
    for($i = 0; $i <= $n+4; $i++){
        $dp[$i] = 0;
    }
    
    for($i = 1; $i <= $n+4; $i++){
            if($i > 2){
                $dp_a = $dp[$i - 2] + $a;
            }else{
                $dp_a = $a;
            }
            
            if($i > 5){
                $dp_b = $dp[$i - 5] + $b;
            }else{
                $dp_b = $b;
            }
            $dp[$i] = min($dp_a, $dp_b);
        
    }
    print_r($dp[$n]);
?>