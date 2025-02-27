<?php 

$strCount = intval(trim(fgets(STDIN)));
$stringArrays = explode(' ', trim(fgets(STDIN)));
$charCount = ['A' => 0, 'B' => 0, 'C' => 0];

foreach ($stringArrays as $string) {
  if (isset($charCount[$string])) { 
    $charCount[$string]++;
  }
}

ksort($charCount);

foreach($charCount as $string => $count) {
  echo $count . "\n";
}

?>