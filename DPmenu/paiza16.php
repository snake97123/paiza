<?php 
  
  $n = trim(fgets(STDIN));
  $trees = [];
  for($i = 0; $i <= $n; $i++){
    $trees[$i] = trim(fgets(STDIN));
  }
  $dp =[];
  for($i = 0; $i < $n; $i++){
    $dp[$i] = 1;
  }
  for($i = 1; $i < $n; $i++){
    for($j = 0; $j < $i; $j++){
      if ($trees[$j] < $trees[$i]){
        $dp[$i] = max($dp[$i], $dp[$j] + 1);
      }
    }
  }
  echo max($dp);



?>

<!-- 
n = int(input())
trees_list = [int(input()) for i in range(n)]

def minimum_decrease_segment(trees_list):
  dp = [1] * n 
  for i in range(1,n):
      for j in range(0,i):
          if trees_list[j] > trees_list[i]:
              dp[i] = max(dp[i], dp[j] + 1)
  return max(dp)


result = minimum_decrease_segment(trees_list)
print(result)
             -->