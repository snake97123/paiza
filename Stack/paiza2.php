<?php
    $query_count = intval(trim(fgets(STDIN)));
    $A = [];
    
    for ($i = 0; $i < $query_count; $i++) {
        $query = explode(" ", trim(fgets(STDIN)));
        if($query[0] == "1"){
            $A[] = $query[1];
        } 
        if ($query[0] == "2" && count($A) > 0) {
           echo array_shift($A) . "\n";
        }
        
        if(count($A) > 0 ){
            echo implode(" ", $A) . "\n";
        } else {
            echo "\n";
        }
    } 
?>
