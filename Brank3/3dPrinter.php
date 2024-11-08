<?php
// 最初の行からX, Y, Zを取得
list($X, $Y, $Z) = array_map('intval', explode(' ', trim(fgets(STDIN))));

// 三次元配列を初期化
$cube = array_fill(0, $Z, array_fill(0, $X, array_fill(0, $Y, '.')));

// 現在の高さ（z軸）を示すインデックス
$z = 0;
// 現在の奥行き（x軸）を示すインデックス
$x = 0;

// 各行を処理
while ($line = fgets(STDIN)) {
    $line = trim($line);
    if ($line === '--') {
        // 区切り記号の場合、高さを1つ上げ、奥行きのインデックスをリセット
        $z++;
        $x = 0;
        continue;
    }
    // 行を文字ごとに分割し、y軸に対応する位置に格納
    for ($y = 0; $y < $Y; $y++) {
        $cube[$z][$x][$y] = $line[$y];
    }
    // 奥行きのインデックスを増加
    $x++;
}

// 正面から見た図を作成
$front_view = array_fill(0, $Z, array_fill(0, $Y, '.'));

// 各高さ（z軸）について処理
for ($z = 0; $z < $Z; $z++) {
    // 各横幅（y軸）について処理
    for ($y = 0; $y < $Y; $y++) {
        // 奥行き（x軸）方向に'#'があるか確認
        for ($x = 0; $x < $X; $x++) {
            if ($cube[$z][$x][$y] === '#') {
                $front_view[$z][$y] = '#';
                break;
            }
        }
    }
}

// 正面図を上から下へ出力
for ($z = $Z - 1; $z >= 0; $z--) {
    echo implode('', $front_view[$z]) . "\n";
}
?>
