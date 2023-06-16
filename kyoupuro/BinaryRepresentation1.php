<?php

$N = trim(fgets(STDIN));

$binary = "";
while($N > 0) {
    $binary = ($N % 2) . $binary;
    $N = intval($N / 2);
}

$binary = str_pad($binary, 10, "0", STR_PAD_LEFT);

echo $binary;

?>