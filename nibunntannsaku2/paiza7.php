<?php

function findLeftInsertPosition($array, $value, $start, $end) {
    while ($start < $end) {
        $middle = intdiv($start + $end, 2);
        if ($array[$middle] >= $value) {
            $end = $middle;
        } else {
            $start = $middle + 1;
        }
    }
    return $start;
}

function findRightInsertPosition($array, $value, $start, $end) {
    while ($start < $end) {
        $middle = intdiv($start + $end, 2);
        if ($array[$middle] > $value) {
            $end = $middle;
        } else {
            $start = $middle + 1;
        }
    }
    return $start;
}

$participantCount = intval(trim(fgets(STDIN)));
$arrivalAndDepartureTimes = [];
for ($i = 0; $i < $participantCount; $i++) {
    $arrivalAndDepartureTimes[] = array_map('intval', explode(' ', trim(fgets(STDIN))));
}

$arrivalTimes = [];
$departureTimes = [];
foreach ($arrivalAndDepartureTimes as $times) {
    $arrivalTimes[] = $times[0];
    $departureTimes[] = $times[1];
}

sort($arrivalTimes);
sort($departureTimes);

for ($i = 0; $i < $participantCount; $i++) {
    $leftOverlap = findLeftInsertPosition($departureTimes, $arrivalAndDepartureTimes[$i][0], 0, count($departureTimes));
    $rightOverlap = $participantCount - findRightInsertPosition($arrivalTimes, $arrivalAndDepartureTimes[$i][1], 0, count($arrivalTimes));
    echo ($participantCount - 1 - ($leftOverlap + $rightOverlap)) . "\n";
}

?>