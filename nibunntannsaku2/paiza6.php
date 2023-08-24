<?php 

list($N, $K) = array_map('intval', explode(' ', trim(fgets(STDIN))));

$A = [];
$B = [];
$currentTotalTime = 0;

for($i = 0; $i < $N; $i++) {
    list($A[$i], $B[$i]) = array_map('intval', explode(' ', trim(fgets(STDIN))));
    $currentTotalTime += ceil($B[$i] / $A[$i]);
}

$availableTime = $K - $currentTotalTime;

function calcTotalTime($extraWork) {
  global $A, $B, $N;

  $totalTime = 0;
  for($i = 0; $i < $N; $i++) {
    $totalTime += ceil(($B[$i] + $extraWork) / $A[$i]);
  }
  return $totalTime;
}

function binarySearch($left, $right) 
{
  global $K;

  while($left <= $right) 
  {
    $mid = intdiv($left + $right, 2);
    if(calcTotalTime($mid) <= $K) {
      $left = $mid + 1;
    } else {
      $right = $mid - 1;
    }
  }

  return $right;
}

$minEfficiency = min($A);
$maxPossibleExtraWork = $availableTime * $minEfficiency;
echo binarySearch(0, $maxPossibleExtraWork);