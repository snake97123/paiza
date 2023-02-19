<?php
  $input_information = explode(" ", trim(fgets(STDIN)));
  $cup_num = $input_information[0];
  $operation_times = $input_information[1];
  $cup_arrays = array_fill(0, $cup_num + 1, 0);
  // $cup_arrays = array();
  // for ($i = 0; $i <= 3000; $i++) {
  //     $cup_arrays[$i] = 0;
  // }
  $cup_arrays[0] = 1;
  
  for($j = 0; $j < $operation_times; $j++ ) {
      $operations = explode(" ", trim(fgets(STDIN)));
      $operation = $operations[0];
      $subject1 = $operations[1];
      $subject2 = $operations[2];
      
      if ($operation == 1) {
          $temp = $cup_arrays[$subject1];
          $cup_arrays[$subject1] = $cup_arrays[$subject2];
          $cup_arrays[$subject2] = $temp;
      } else if($operation == 2) {
          array_splice($cup_arrays, $subject1, 0, 0);
      }
  } 
  $index = array_search(1, $cup_arrays);
  print($index + 1);
?>