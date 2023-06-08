<?php
$n = trim(fgets(STDIN));
//連想配列を作る。
$name_dict = [];
for($i = 0; $i < $n; $i++){
    $input = trim(fgets(STDIN));
    $input = explode(" ", $input);
    $name_dict[$input[0]] = $input[1];
}
[$min, $max] = explode(" ", trim(fgets(STDIN)));


foreach($name_dict as $key => $value){
    if($min <= $value && $value <= $max){
        echo $key . "\n";
    }
}
?>


