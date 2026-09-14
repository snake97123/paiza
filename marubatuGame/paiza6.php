<?php

$board = [];

for ($rowIndex = 0; $rowIndex < 3; $rowIndex++) {
    $board[] = explode(' ', trim(fgets(STDIN)));
}

foreach ($board as $row) {
    $result = '-';

    if ($row[0] !== '-' && $row[0] === $row[1] && $row[1] === $row[2]) {
        $result = $row[0];
    }

    echo $result . PHP_EOL;
}