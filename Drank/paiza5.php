<?php

[$total_passengers, $exit_passengers, $ride_passengers] = array_map('intval', explode(' ', trim(fgets(STDIN))));
$passengers = $total_passengers - $exit_passengers + $ride_passengers;
echo $passengers;

?>