<?php 

list($firstSnackPrice, $secondSnackPrice) = array_map('intval', explode(' ', trim(fgets(STDIN))));

$totalSnackPrice = $firstSnackPrice + $secondSnackPrice;

echo $totalSnackPrice;
