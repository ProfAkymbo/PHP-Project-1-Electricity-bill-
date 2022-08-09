<?php

declare(strict_types=1); // strict requirement
//function to calculate electricity bill
function calculateBill(int $units){
    //conditions to find charges
    if($units <= 50){
        return $units * 3.50;
    } else if($units <= 150) {
        return (50 * 3.50) +
               ($units - 50) * 4.0;
    } else if($units <= 250) {
        return (50 * 3.5) +
               (100 * 4.0) +
               ($units - 150) * 5.20;
    } else if($units > 250) {
        return (50 * 3.50) +
               (100 * 4.0) +
               (100 * 5.20) +
               ($units - 250) * 6.50;
    }
    return 0;
}

$Bill = calculateBill(50);
echo ('Your Bill is: '."# " . $Bill);

?>