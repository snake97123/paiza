<!-- 挿入ソート -->
<?php
function insertion_sort(array &$A, int $n) {
    for($i = 1; $i < $n; $i++) {
        $x = $A[$i];
        $j = $i - 1;
        
        while ($j >= 0 && $A[$j] > $x) {
            $A[$j + 1] = $A[$j];
            $j--;
        }
        
        $A[$j + 1] = $x;
        echo implode(" ", $A) . "\n";
    }
}

 $n = trim(fgets(STDIN));
 $array = explode(" ", trim(fgets(STDIN)));
 
 insertion_sort($array, $n);
?>