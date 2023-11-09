<?php

$s = fgets(STDIN);

$jpgPosition = strpos($s, '.jpg');
$pngPosition = strpos($s, '.png');

if($jpgPosition === false && $pngPosition === false) {
  echo "-1\n";
} else {
  if ($jpgPosition === false) {
    echo $pngPosition . "\n";
  } elseif ($pngPosition === false) {
    echo $jpgPosition . "\n";
  } else {
    echo min($jpgPosition, $pngPosition) . "\n";
  }
}
?>