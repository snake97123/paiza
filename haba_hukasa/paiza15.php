<?php

list($H, $W) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$grid = [];
while($line = trim(fgets(STDIN))) {
  $grid[] = str_split(trim($line));
}

$visited = array_fill(0, $H, array_fill(0, $W, false));

$count = 0;

function bfs($grid, $visited, $startRow, $startCol, $H, $W) {
  $directions = [[-1, 0], [1, 0], [0, -1], [0, 1]]; 
  $queue = new SplQueue();
  $queue->enqueue([$startRow, $startCol]);
  $visited[$startRow][$startCol] = true;
  
  while (!$queue->isEmpty()) {
      list($row, $col) = $queue->dequeue();
      foreach ($directions as $direction) {
          $newRow = $row + $direction[0];
          $newCol = $col + $direction[1];
          if ($newRow >= 0 && $newRow < $H && $newCol >= 0 && $newCol < $W 
              && !$visited[$newRow][$newCol] && $grid[$newRow][$newCol] == '.') {
              $visited[$newRow][$newCol] = true;
              $queue->enqueue([$newRow, $newCol]);
          }
      }
  }
  
  return $visited;
}

for ($i = 0; $i < $H; $i++) {
  for ($j = 0; $j < $W; $j++) {
      if (!$visited[$i][$j] && $grid[$i][$j] == '.') {
          $visited = bfs($grid, $visited, $i, $j, $H, $W);
          $count++;
      }
  }
}

echo $count;

?>