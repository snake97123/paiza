<?php

$seating_order = array();
$seating_order[] = trim(fgets(STDIN));
$seating_order[] = trim(fgets(STDIN));
$seating_order[] = trim(fgets(STDIN));
$seating_order[] = trim(fgets(STDIN));

echo $seating_order[2] . " " . $seating_order[0] . "\n";
echo $seating_order[3] . " " . $seating_order[1] . "\n";
?>
