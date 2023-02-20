<?php 

[$N, $Q] = explode(" ", trim(fgets(STDIN)));
$A = explode(" ", trim(fgets(STDIN)));
$B = explode(" ", trim(fgets(STDIN)));



foreach ($B as $number) {
   $A = array_filter($A, function($x) use ($number) {
    return ($x % $number) != 0;
   });
}

if (count($A) == 0) {
  echo "You\n";
} else {
  echo "Kyoko\n";
  echo implode(" ", $A) . "\n";
}
?>

