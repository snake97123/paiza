<!-- the problem of finding the amount of leftovers -->
<!-- Each input value
m: Purchase quantity
p: first sale volume (%)
q: Next sale volume (%) -->
<!-- we find the final amount left over  -->
<?php
list($m, $p, $q) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$first_leftover = $m * (1 - $p / 100);
$final_leftover = $first_leftover * (1 - $q / 100);
echo $final_leftover . "\n";
?>