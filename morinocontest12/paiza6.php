<?php

list($n, $k) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$prices = array_map('intval', explode(' ', trim(fgets(STDIN))));
$hated_gifts = array_map('intval', explode(' ', trim(fgets(STDIN))));

$max_price = max($prices);

foreach($hated_gifts as $hated_gift) {
  if($prices[$hated_gift - 1] === $max_price) {
    echo "Yes\n";
    exit;
  }
}

echo "No\n";

?>