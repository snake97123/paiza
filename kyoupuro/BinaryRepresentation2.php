<?php 

$binary = trim(fgets(STDIN));
$decimal = 0;
for($i = 0; $i < strlen($binary); $i++) {
    $decimal += $binary[$i] * pow(2, strlen($binary) - $i - 1);
}
echo $decimal;

?>