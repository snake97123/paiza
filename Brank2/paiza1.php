<?php
$input = explode(" ", trim(fgets(STDIN)));
$H = $input[0];
$W = $input[1];
$board = array();
for ($i = 0; $i < $H; $i++) {
  $board[$i] = str_split(trim(fgets(STDIN)));
}

// print_r($board);
$coordinates = explode(" ", trim(fgets(STDIN)));
$y = $coordinates[0];
$x = $coordinates[1];

if ($board[$y][$x] == "#") {
  $board[$y][$x] = ".";
} else {
  $board[$y][$x] = "#";
}

for ($i = 0; $i < $H; $i++) {
  echo implode("", $board[$i]) . PHP_EOL;
}
?>