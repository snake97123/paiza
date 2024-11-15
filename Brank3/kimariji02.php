<?php
// 入力の和歌数を取得
$numOfPoems = intval(trim(fgets(STDIN)));

// 和歌を取得
$poems = [];
for ($i = 0; $i < $numOfPoems; $i++) {
    $poems[] = trim(fgets(STDIN));
}

// 和歌の長さの最小値を計算
$minLength = min(array_map('strlen', $poems));

// 全ての和歌でJ文字目が一致しているかを判定する関数
function isCharacterMatching($poems, $position)
{
    $char = $poems[0][$position]; // 基準の文字
    foreach ($poems as $poem) {
        if ($poem[$position] !== $char) {
            return false; // 一致しない場合は false を返す
        }
    }
    return true; // 全て一致していれば true を返す
}

// 各文字の一致を判定し出力
for ($j = 0; $j < $minLength; $j++) {
    echo isCharacterMatching($poems, $j) ? "Yes" : "No";
    echo "\n";
}
