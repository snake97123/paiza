<?php
// 入力処理
$numberOfHeights = intval(trim(fgets(STDIN))); // 人数を取得
$heights = getHeights($numberOfHeights);

// 昇順チェック
$result = isHeightsInOrder($heights);
echo $result;

function getHeights(int $numberOfHeights): array {
  $heights = [];
  for ($i = 0; $i < $numberOfHeights; $i++) {
    $heights[] = intval(trim(fgets(STDIN))); // 各身長を取得
  }
  return $heights;
}

// 関数: 身長が昇順かどうかをチェック
function isHeightsInOrder(array $heights): string {
    $currentHeight = 0;
    foreach ($heights as $nextHeight) {
        if ($nextHeight >= $currentHeight) {
            $currentHeight = $nextHeight;
        } else {
            return "No";
        }
    }
    return "Yes";
}
?>