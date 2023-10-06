<?php

list($n, $m) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$str1 = trim(fgets(STDIN));
$str2 = trim(fgets(STDIN));

//$str1と同じ文字数の接頭辞と接尾辞をstr2から取り出す。
$prefix = substr($str2, 0, $n);
$suffix = substr($str2, -$n);

if($str1 === $prefix && $str1 === $suffix) {
  echo 0;
} elseif($str1 === $prefix) {
  echo 1;
} elseif($str1 === $suffix) {
  echo 2;
} else {
  echo 3;
}
?>