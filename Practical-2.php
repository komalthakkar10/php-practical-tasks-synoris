<?php
//Sum of divisors of factorial

function factorial($n) {
    $fact = 1;
    for ($i = 2; $i <= $n; $i++){
        $fact *= $i;
    }
    return $fact;
}

function sumOfDivisors($num) {
    $sum = 0;
    for ($i = 1; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $sum += $i;

            $divPair = $num / $i;
            if ($i != $divPair) {
                $sum += $divPair;
            }
        }
    }
    return $sum;
}

$n = 6;
$fact = factorial($n); // 6! = 6*5*4*3*2*1=1200
$sum = sumofDivisors($fact); // 1, 2, 3, 4, 5, 6, 8, 9, 10, 12, 15, 16, 18, 20, 24, 30, 36, 40, 45, 48, 60, 72, 80, 90, 120, 144, 180, 240, 360, 720 = 2418

//output
echo "Factorial of $n is: $fact<br>";
echo "Sum of all divisors of $fact is: $sum";
?>