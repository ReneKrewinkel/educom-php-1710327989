<?php
function sumNumbers (...$x){
    $sum = 0;
    foreach ($x as $value) {
        $sum += $value;
    }
    return $sum;
}

$a = sumNumbers(2, 2, 4, 1, 1);
echo $a;
?>