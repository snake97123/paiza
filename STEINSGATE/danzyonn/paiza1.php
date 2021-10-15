<?php
    $inputs = explode(" ", trim(fgets(STDIN)));
    
    $N = $inputs[0];
    $M = $inputs[1];
    $Q = $inputs[2];
    
    for ($i = 1; $i <= $M; $i++) {
         $is_room_number[$i] = trim(fgets(STDIN)); 
    }
    // print_r($is_room_number);
    
    for ($i = 0; $i < $Q; $i++) {
         [$player, $room] = explode(" ", trim(fgets(STDIN)));
         if(array_search($room, $is_room_number)){
             echo "No" . "\n";
         } else {
             $is_room_number[$player] = $room;
             echo "Yes" . "\n";
         }
    }
?>