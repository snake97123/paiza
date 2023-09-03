<?php
   $n = intval(trim(fgets(STDIN)));
   $flag = isPrime($n);
   function isPrime($n){
    if($n === 1){
      return false;  
    }
    
    for($i = 2; $i < sqrt($n); $i++){
        if($n % $i == 0){
            return false;
        }
    }
    return true;
       
   }
   
   if($flag){
       echo "Yes";
   } else {
       echo "No";
   }
   
?>