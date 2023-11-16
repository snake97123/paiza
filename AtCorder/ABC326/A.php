<?php

list($X, $Y) = array_map('intval', explode(' ', trim(fgets(STDIN))));
// 階数の差を算出する。
$diff = $Y - $X;

// 2階分の上り、または3階分までの下りであるかを判定する。
if($diff <= 2 && $diff >= -3) {
  echo "Yes\n";
} else {
  echo "No\n";
}

?>