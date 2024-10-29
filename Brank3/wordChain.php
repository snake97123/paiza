<?php

// 入力の取得
[$N, $K, $M] = explode(" ", trim(fgets(STDIN)));

// 単語リストの取得
$wordList = [];
for ($i = 0; $i < $K; $i++) {
    $wordList[trim(fgets(STDIN))] = true;
}

// 発言リストの取得
$statementsList = [];
for ($i = 0; $i < $M; $i++) {
    $statementsList[] = trim(fgets(STDIN));
}

// 使用された単語のセット
$saidWords = [];

// 脱落者リストの初期化
$dropoutList = array_fill(0, $N, false);
$remainingCount = $N;

$previous_word = '';
$current_player = 0;

// print_r($statementsList);

foreach ($statementsList as $statement) {
    $is_valid = true;
    // echo($statement);
    
    // 1. 単語リストに存在するか？
    if (!isset($wordList[$statement])) {
        // echo 1;
        $is_valid = false;
    }
    // 2. 頭文字チェック（最初の発言以外）
    elseif ($previous_word !== '' && substr($previous_word, -1) !== $statement[0]) {
        $is_valid = false;
        // echo 2;
    }
    // 3. 重複チェック
    elseif (isset($saidWords[$statement])) {
        $is_valid = false;
        // echo 3;
    }
    // 4. 末尾が 'z' で終わるか？
    elseif (substr($statement, -1) === 'z') {
        $is_valid = false;
        // echo 4;
    }
 

    // ルール違反がある場合
    if (!$is_valid) {
        $dropoutList[$current_player] = true;
        $remainingCount--;
        $previous_word = '';
    } else {
        // 有効な発言を記録
        $saidWords[$statement] = true;
        $previous_word = $statement;
    }

    // 残りのプレイヤーがいなくなった場合はループを終了
    if ($remainingCount === 0) {
        break;
    }

    // 次のプレイヤーに移動（脱落者をスキップ）
    do {
        $current_player = ($current_player + 1) % $N;
    } while ($dropoutList[$current_player] && $remainingCount > 0);
}

// 残存プレイヤーリストの作成と出力
$remaining_players = [];
for ($i = 0; $i < $N; $i++) {
    if (!$dropoutList[$i]) {
        $remaining_players[] = $i + 1;
    }
}

// 出力
echo count($remaining_players) . PHP_EOL;
foreach ($remaining_players as $player) {
    echo $player . PHP_EOL;
}

?>