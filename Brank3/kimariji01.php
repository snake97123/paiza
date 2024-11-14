<?php

$input = trim(fgets(STDIN));
list($waka_count, $target_waka_number) = array_map('intval', explode(' ', $input));
$waka_list = [];
for ($i = 0; $i < $waka_count; $i++) {
    $waka_list[] = trim(fgets(STDIN));
}

if ($target_waka_number > 0 && $target_waka_number <= $waka_count) {
    $target_waka = $waka_list[$target_waka_number - 1];
    echo $target_waka;
} else {
    echo "Error: Target waka number is out of range.";
}
