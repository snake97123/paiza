<?php 

$days = trim(fgets(STDIN));
$total_participants_number = trim(fgets(STDIN));
$participants_number = array_fill(0, $days + 1, 0);
for($i = 0; $i < $total_participants_number; $i++) {
    [$start_day, $end_day] = explode(" ", trim(fgets(STDIN)));
    $participants_number[$start_day - 1] += 1;
    $participants_number[$end_day] -= 1;
}
// print_r($participants_number);
$sum_participants_number = array();
$sum_participants_number[0] = $participants_number[0];
for($i = 1; $i < $days; $i++) {
    $sum_participants_number[$i] = $sum_participants_number[$i - 1] + $participants_number[$i];
}

foreach($sum_participants_number as $number) {
    echo $number . "\n";
}

?>
