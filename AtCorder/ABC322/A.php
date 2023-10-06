<?php

$n = intval(trim(fgets(STDIN)));
$str = trim(fgets(STDIN));

$pos = strpos($str, 'ABC');
if($pos === false) {
  echo -1;
} else {
  echo $pos + 1;
}

?>