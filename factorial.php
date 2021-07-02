<?php
function factorial(int $num): int
{
    // negative number handling
    if ($num < 0) {
        return -1;
    }

    $result = 1;
    for ($multiplier = 1; $multiplier <= $num; $multiplier++) {
        $result *= $multiplier;
    }

    return $result;
}


echo factorial(0) . "\r\n";
echo factorial(5) . "\r\n";
echo factorial(-5) . "\r\n";