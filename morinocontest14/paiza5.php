<?php
    [$pizza_types, $number_of_customers] = array_map('intval', explode(' ', trim(fgets(STDIN))));
    $order_pizza = array_map('intval', explode(' ', trim(fgets(STDIN))));
    $ordered_pizza_type_count = count(array_unique($order_pizza));
    echo $ordered_pizza_type_count;
?>