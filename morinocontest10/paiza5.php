<?php

list($n, $a, $b) = array_map("intval", explode(" ", trim(fgets(STDIN))));
$total_pages = $a * $b;
if($total_pages >= $n) {
  echo "Yes";
} else {
  echo"No";
}