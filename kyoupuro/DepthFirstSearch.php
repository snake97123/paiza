<?php

list($n, $m) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$graph = array_fill(1, $n, array());
$visited = array_fill(1, $n, false);

for($i = 0; $i < $m; $i++){
    list($a, $b) = array_map('intval', explode(' ', trim(fgets(STDIN))));
    $graph[$a][] = $b;
    $graph[$b][] = $a;
}

function dfs($v){
    global $graph, $visited, $next;
    $visited[$v] = true;
    foreach($graph[$v] as $next_v){
        if(!$visited[$next_v]){
            dfs($next_v);
        }
    }
}

dfs(1);

if($visited == array_fill(1, $n, true)){
    echo "The graph is connected.";
} else {
    echo "The graph is not connected.";
}

?>