<?php 

list($department_count, $receipt_count) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$departments = [];
for($i = 0; $i < $department_count; $i++) {
  $department_name = trim(fgets(STDIN));
  $departments[$department_name] = [];
}

for($i = 0; $i < $receipt_count; $i++) {
  $receipt_information = explode(' ', trim(fgets(STDIN)));
  $receipt_department_name = $receipt_information[0];
  $receipt_order_number = $receipt_information[1];
  $receipt_price = intval($receipt_information[2]);

  $departments[$receipt_department_name][] = [$receipt_order_number, $receipt_price];
}

foreach ($departments as $department_name => $receipts) {
  echo $department_name . "\n";
  foreach ($receipts as $receipt) {
    echo $receipt[0] . " " . $receipt[1] . "\n";
  }
  echo "-----\n";
}

?>