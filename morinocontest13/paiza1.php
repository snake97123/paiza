<?php
$str1 = trim(fgets(STDIN));
$str2 = trim(fgets(STDIN));

$result1 = strpos($str1, $str2);
$result2 = strpos($str2, $str1);

if($result2 === 0) {
    echo "Yes" . PHP_EOL; 
} else {
    echo "No" . PHP_EOL;
}

if($result1 === 0) {
    echo "Yes";
} else {
    echo "No";
}
?>