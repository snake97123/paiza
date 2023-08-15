<!-- 住民N人が与えられる。ある条件があり、それに該当する人が誰であってもわかる最小の回数を求める。
二分探索を使用する。 -->
<?php

$N = intval(trim(fgets(STDIN)));
$i = 1;
$tests_count = 0;

while($i <= $N) {
  $i = $i * 2;
  $tests_count++;
}

echo $tests_count;

?>