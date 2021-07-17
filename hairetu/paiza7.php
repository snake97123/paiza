
    <?php
// Your code here!
$pins = array();
   for ($i = 0; $i < 4; $i++) {
         $inputs = explode(" ", trim(fgets(STDIN)));
         array_push($pins, $inputs);
   }
   $pins_array = array_reduce($pins, 'array_merge', array());
   $result = array_reverse($pins_array);
   
   $key = array_search('1', $result);
//   echo $key + 1;
   
 
//   print_r($result);

    $rest_pin_num = array_count_values($result);
    // echo ($rest_pin_num[1]);
    echo $key + 1 . "\n";
    echo $rest_pin_num[1];
      
?>