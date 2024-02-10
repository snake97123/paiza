<?php

$a = intval(trim(fgets(STDIN)));
$b = intval(trim(fgets(STDIN)));
$c = intval(trim(fgets(STDIN)));

//Determine whether two of the three integers are equal.
if($a == $b || $a == $c || $b == $c) {
  echo "Yes";
} else {
  echo "No";
}

?>