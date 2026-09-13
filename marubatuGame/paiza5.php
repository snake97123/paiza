<?php

$hasEmptyCell = false;

for ($row = 0; $row < 3; $row++) {
    $boardRow = fgets(STDIN);
    if (strpos($boardRow, '-') !== false) {
        $hasEmptyCell = true;
    }
}

echo $hasEmptyCell ? "Yes\n" : "No\n";
