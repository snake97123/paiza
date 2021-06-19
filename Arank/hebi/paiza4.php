<?php
//値の取得
    $test = explode(" ", trim(fgets(STDIN)));
    $map_line = $test[0];
    $map_row = $test[1];
    $y = $test[2];
    $x = $test[3];
    $move_times = $test[4];
    
    $direction = 'N';
//座標マップの作成
    for ($i = 0; $i < $map_line; $i++) {
         $map_arrays[$i] = str_split(trim(fgets(STDIN)));
         }
//移動方向と距離の取得。 
         for ($i = 0; $i < $move_times; $i++) {
        $arrays = explode(" ", trim(fgets(STDIN)));
        $input_direction = $arrays[0];
        $moving_distance = $arrays[1];
//進めるか進めないかの判定。
        $stop_counter_number = 1;
 //条件分岐による判定を行う。       
        if($direction == 'N'){
            for($j = 0; $j < $moving_distance; $j++){
            
            if($input_direction == 'L' && $map_arrays[$y][$x-1] == '.'){
                $x--;
                $direction = 'W';
                // echo $y . " ". $x . "\n";
            } elseif ($input_direction == 'R' && $map_arrays[$y][$x+1] == '.') {
                 $x++;
                 $direction = 'E';
                // echo $y . " ". $x . "\n";
            } else {
                $stop_counter_number = 0;
                echo $y . " " . $x . "\n";
                echo 'Stop';
                break;
            }
          }
        //   echo $y . " " . $x . "\n";
      }
      elseif($direction == 'E'){
          for ($j = 0; $j < $moving_distance; $j++) {
              if($input_direction == 'L' && $map_arrays[$y-1][$x] == '.'){
              $y--;
              $direction = 'N';
              // echo $y . " ". $x . "\n";
          } elseif ($input_direction == 'R' && $map_arrays[$y+1][$x] == '.') {
               $y++;
              $direction = 'S';
              // echo $y . " ". $x . "\n";
          } else {
              $stop_counter_number = 0;
              echo $y . " " . $x . "\n";
              echo 'Stop';
              break;
          }
        }
      //   echo $y . " " . $x . "\n"; 
      }
      elseif($direction == 'S'){
          for ($j = 0; $j < $moving_distance; $j++) {
               if($input_direction == 'L' && $map_arrays[$y][$x+1] == '.'){
              $x++;
              $direction = 'E';
              // echo $y . " ". $x . "\n";
          } elseif ($input_direction == 'R' && $map_arrays[$y][$x-1] == '.') {
               $x--;
              $direction = 'W';
              // echo $y . " ". $x . "\n";
          } else {
              $stop_counter_number = 0;
              echo $y . " " . $x . "\n";
              echo 'Stop';
              break;
          }
        }
    }
    elseif($direction == 'W'){
        for ($j = 0; $j < $moving_distance; $j++) {
             if($input_direction == 'L' && $map_arrays[$y+1][$x] == '.'){
          $y++;
          $direction = 'S';
        //   echo $y . " ". $x . "\n";
      } elseif ($input_direction == 'R' && $map_arrays[$y-1][$x] == '.') {
           $y--;
          $direction = 'N';
        //   echo $y . " ". $x . "\n";
      } else {
          $stop_counter_number = 0;
          echo $y . " " . $x . "\n";
          echo 'Stop';
          break;
      }
     
    }
    // echo $y . " " . $x . "\n";  
    
  }
   if ($stop_counter_number == 1) {
        echo $y . " " . $x . "\n";
    }else{
     break;   
    }
}


?>