<?php

$days = 30;
$overtime = 0;

for ($i = 0; $i < $days; $i++) {

    $work_time = (int)trim(fgets(STDIN));

    if ($work_time > 8) {
        $overtime += ($work_time - 8);
    }
}
echo $overtime . "\n";
?>
