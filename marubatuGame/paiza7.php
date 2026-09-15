<?php

$board = [];

for ($rowIndex = 0; $rowIndex < 3; $rowIndex++) {
    $board[] = explode(' ', trim(fgets(STDIN)));
}

for ($columnIndex = 0; $columnIndex < 3; $columnIndex++) {
    $topCell = $board[0][$columnIndex];
    $result = '-';

    if ($topCell !== '-' && $topCell === $board[1][$columnIndex] && $topCell === $board[2][$columnIndex]) {
        $result = $topCell;
    }

    echo $result . PHP_EOL;
}
