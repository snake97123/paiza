<?php
list($l1, $r1, $l2, $r2) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$numAvailableDays =  min($r1, $r2) - max($l1, $l2);
echo $numAvailableDays >= 0 ? $numAvailableDays + 1 : 0;
?>

