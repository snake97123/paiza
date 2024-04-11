<?php
// 文字列が回文かどうかを判定するプログラム
$input = trim(fgets(STDIN));
$len = strlen($input);
$flag = true;
for ($i = 0; $i < $len / 2; $i++) {
    if ($input[$i] != $input[$len - $i - 1]) {
        $flag = false;
        break;
    }
}

if ($flag) {
    echo "Yes";
} else {
    echo "No";
}

?>