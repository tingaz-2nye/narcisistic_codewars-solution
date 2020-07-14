<?php

  function narcisistic(int $value): bool{
    $len = strlen($value);
    $total = 0;
    $ge = (string)$value;
    

    for($i = 0; $i <= $len ; $i++){
        // @sum = pow((int)$ge[$i], $len); // using the pow function 
        @$sum = (int)$ge[$i] ** $len;
        $total+= $sum;
    }

    if($total == $value){
        return true;
    }else{
        return false;
    }

  }

  if(narcisistic(153)){
    echo 'yes';
  }else{
    echo 'No';
  }

?>
