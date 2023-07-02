<?php
// Your code here!
$N = trim(fgets(STDIN));
$A = array_map('intval', explode(' ', trim(fgets(STDIN))));
$B = array_map('intval', explode(' ', trim(fgets(STDIN))));

$dp = array_fill(0, $N + 1, 0);
$dp[1] = 0;
$dp[2] = $A[0];
for($i = 3; $i <= $N; $i++) {
    $dp[$i] = min($dp[$i - 1] + $A[$i - 2], $dp[$i - 2] + $B[$i - 3]);
}
echo $dp[$N];
?>
