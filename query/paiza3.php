<?php 

list($total_companies, $total_transactions) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$companies = [];
for($i = 0; $i < $total_companies; $i++) {
  $company_information = explode(' ', trim(fgets(STDIN)));
  $companies[$company_information[0]] = [
    'password' => $company_information[1],
    'current_balance' => $company_information[2],
  ];
}

for($i = 0; $i < $total_transactions; $i++) {
  $transaction_information = explode(' ', trim(fgets(STDIN)));
  $transaction_company_name = $transaction_information[0];
  $transaction_password = $transaction_information[1];
  $transaction_amount = intval($transaction_information[2]);
  if($companies[$transaction_company_name]['password'] === $transaction_password) {
    $companies[$transaction_company_name]['current_balance'] -= $transaction_amount;
  } 
}

  foreach($companies as $company_name => $company_information) {
    echo $company_name . ' ' . $company_information['current_balance'] . "\n";
  }
?>