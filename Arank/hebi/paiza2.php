<?php
    //値の取得
    $test = explode(" ", trim(fgets(STDIN)));
    $map_line = $test[0];
    $map_row = $test[1];
    $y = $test[2];
    $x = $test[3];
    $direction = $test[4];
    $direction_of_tavel = $test[5];
    
    //for文を使用して配列をつくりmapの作成
    for ($i = 0; $i < $map_line; $i++) {
         $map_arrays[$i] = str_split(trim(fgets(STDIN)));
    }
    //それぞれの方角で条件分岐を行う。
    if ($direction == 'N' && $direction_of_tavel == 'L') {
        if ($map_arrays[$y][$x-1] == '.') {
            echo 'Yes';
        } else {
            echo 'No';
        }
    }
    if ($direction == 'N' && $direction_of_tavel == 'R') {
        if ($map_arrays[$y][$x+1] == '.') {
            echo 'Yes';
        } else {
            echo 'No';
        }
    }
    if ($direction == 'E' && $direction_of_tavel == 'L') {
        if ($map_arrays[$y-1][$x] == '.') {
            echo 'Yes';
        } else {
            echo 'No';
        }
    }
    if ($direction == 'N' && $direction_of_tavel == 'R') {
        if ($map_arrays[$y+1][$x] == '.') {
            echo 'Yes';
        } else {
            echo 'No';
        }
    }
    if ($direction == 'S' && $direction_of_tavel == 'L') {
      if ($map_arrays[$y][$x+1] == '.') {
          echo 'Yes';
      } else {
          echo 'No';
      }
  }
  if ($direction == 'S' && $direction_of_tavel == 'R') {
      if ($map_arrays[$y][$x-1] == '.') {
          echo 'Yes';
      } else {
          echo 'No';
      }
  }
  if ($direction == 'W' && $direction_of_tavel == 'L') {
      if ($map_arrays[$y+1][$x] == '.') {
          echo 'Yes';
      } else {
          echo 'No';
      }
  }
  if ($direction == 'W' && $direction_of_tavel == 'R') {
      if ($map_arrays[$y-1][$x] == '.') {
          echo 'Yes';
      } else {
          echo 'No';
      }
  }
?>