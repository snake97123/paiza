<?php
    function countWordOccurrences($words) {
    
    $wordCounts = [];
    
    foreach ($words as $word) {
        if (!isset($wordCounts[$word])) {
            
            $wordCounts[$word] = 1;
        } else {
            
            $wordCounts[$word]++;
        }
    }
    
    foreach ($wordCounts as $word => $count) {
        echo $word . ' ' . $count . "\n";
    }
}

    $words = explode(' ', trim(fgets(STDIN)));
    countWordOccurrences($words);
?>