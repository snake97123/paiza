<?php
    $s = trim(fgets(STDIN));
    
    $pattern = '/.*p.*a.*i.*z.*a.*/';
    
    if(preg_match($pattern, $s)) {
        echo "Yes";
    } else {
        echo "No";
    }
?>