<?php
//パイプの本数と切り取る長さを変数として格納する。命名は他の人が読んでわかりやすいようにする。
[$pipe_count, $cut_length] = array_map('intval', explode(' ', trim(fgets(STDIN))));
//それぞれのパイプの長さを配列として格納する。
$pipe_length_list = array_map('intval', explode(' ', trim(fgets(STDIN))));
//何本切り取れるかカウントする
$cut_count = 0;
for ($i = 0; $i < $pipe_count; $i++) {
    $cut_count += intdiv($pipe_length_list[$i], $cut_length);
}

echo $cut_count;
?>