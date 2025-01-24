<?php

list($snackTypeCount, $bugetLimit) = explode(" ", trim(fgets(STDIN)));
$totalPrice = 0;
for($i = 0; $i < $snackTypeCount; $i++) {
    $snackPrice = intval(trim(fgets(STDIN)));
    $totalPrice += $snackPrice;
}

if($totalPrice <= $bugetLimit) {
    echo "Yes";
} else {
    echo "No";
}

?>