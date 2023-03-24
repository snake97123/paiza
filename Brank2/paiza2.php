<?php
list($h, $w) = explode(" ", trim(fgets(STDIN)));

$board = array();
for ($i = 0; $i < $h; $i++) {
  $board[] = str_split(trim(fgets(STDIN)));
}

list($y, $x) = explode(" ", trim(fgets(STDIN)));

$directions = array(
  array(0, 1),
  array(0, -1),
  array(1, 0),
  array(-1, 0),
  array(0, 0)
);

foreach ($directions as $direction) {
  $ny = $y + $direction[0];
  $nx = $x + $direction[1];
  if ($ny >= 0 && $ny < $h && $nx >= 0 && $nx < $w) {
    if ($board[$ny][$nx] == "#") {
      $board[$ny][$nx] = ".";
    } else {
      $board[$ny][$nx] = "#";
    }
  }
}

foreach ($board as $row) {
  echo implode("", $row) . "\n";
}
?>