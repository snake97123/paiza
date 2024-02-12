<?php 

list($rice_ball_count, $bread_count) = array_map('intval', explode(' ', trim(fgets(STDIN)))); 

$different_food_eat_possible_to_days = min($rice_ball_count, $bread_count);
$same_food_eat_days = (max($rice_ball_count, $bread_count) - $different_food_eat_possible_to_days) / 2;
echo $different_food_eat_possible_to_days . " " . $same_food_eat_days;

?>
