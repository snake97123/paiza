<?php
    function compareAverages($a, $b)
{
    $arithmetic_mean = ($a + $b) / 2; // 相加平均の計算
    $geometric_mean = sqrt($a * $b); // 相乗平均の計算

    if ($arithmetic_mean > $geometric_mean) {
        return "arithmetic";
    } elseif ($arithmetic_mean < $geometric_mean) {
        return "geometric";
    } else {
        return "equal";
    }
}

list($a, $b) = array_map("intval", explode(" ", trim(fgets(STDIN))));
$result = compareAverages($a, $b);
echo $result;

?>