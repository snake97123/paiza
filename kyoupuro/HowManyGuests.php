<?php 

[$n, $q] = explode(" ", trim(fgets(STDIN)));
//各日にちでの来場者数を格納する配列
$guests = explode(" ", trim(fgets(STDIN)));
//累積来場者数を計算する。
$sum_guests = array();
$sum_guests[0] = 0;
$sum_guests[1] = $guests[0];
for ($i = 2; $i <= $n; $i++) {
  $sum_guests[$i] = $sum_guests[$i - 1] + $guests[$i - 1];
}
for ($i = 0; $i < $q; $i++) {
   [$start, $end] = explode(" ", trim(fgets(STDIN)));
    echo $sum_guests[$end] - $sum_guests[$start - 1] . "\n";
}

?>