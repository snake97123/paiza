<?php
[$h, $w] = explode(" ", trim(fgets(STDIN)));
$board = [];
for ($i = 0; $i < $h; $i++) {
    $board[] = str_split(trim(fgets(STDIN)));
}
[$y, $x] = explode(" ", trim(fgets(STDIN)));

for ($i = 0; $i < $h; $i++) {
    for ($j = 0; $j < $w; $j++) {
        if ($i == $y || $j == $x || abs($i - $y) == abs($j - $x)) {
            if ($board[$i][$j] == ".") {
                echo "#";
            } else {
                echo ".";
            }
        } else {
            echo $board[$i][$j];
        }
    }
    echo PHP_EOL;
}