<?php 

$n = trim(fgets(STDIN));
$kuzi = explode(" ", trim(fgets(STDIN)));
$q = trim(fgets(STDIN));

$sum_atari = array();
if($kuzi[0] == 0) {
    $sum_atari[0] = 0;
} else {
    $sum_atari[0] = 1;
}

for ($i = 1; $i < $n; $i++) {
    if($kuzi[$i] == 0) {
        $sum_atari[$i] = $sum_atari[$i - 1];
    } else {
        $sum_atari[$i] = $sum_atari[$i - 1] + 1;
    }
}


for ($i = 0; $i < $q; $i++) {
    [$start, $end] = explode(" ", trim(fgets(STDIN)));
    $atari = $sum_atari[$end - 1] - $sum_atari[$start - 2];
    $hazure = $end - $start + 1 - $atari;
    if($atari > $hazure) {
        echo "win\n";
    } else if($atari == $hazure) {
        echo "draw\n";
    } else {
        echo "lose\n";
    }
}

?>