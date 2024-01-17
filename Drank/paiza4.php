<?php

$string_array = array_map('trim', explode(' ', fgets(STDIN)));
foreach($string_array as $string){
    echo $string . "\n";
}
?>