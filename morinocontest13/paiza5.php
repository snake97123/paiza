<?php 

$dice_count = intval(trim(fgets(STDIN)));
$dice_spots_list = array_map('intval', explode(' ', trim(fgets(STDIN))));
$dice_spots_sum = 0;
for ($i = 0; $i < $dice_count; $i++) {
    $dice_spots_sum += $dice_spots_list[$i];
}

if($dice_spots_sum % 7 == 0) {
    echo "Yes";
} else {
    echo "No";
}

?>