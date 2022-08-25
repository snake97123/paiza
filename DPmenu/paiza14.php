<?php 

$n = trim(fgets(STDIN));
$height_lists = [];
for($i = 0; $i < $n; $i++){
  $height_lists[$i] = trim(fgets(STDIN));
}
$dp = [];
$count = 1;
for($i = 0; $i < $n; $i++){
    if($height_lists[$i] <= $height_lists[$i + 1]){
        $count += 1;
    } else {
        $count = 1;
    }
    $dp[$i] = $count;
}

echo (max($dp));
?>