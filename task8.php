<?php
/**
 * Create a function with two arguments that will return an array of the first (n) multiples of (x).
 * Assume both the given number and the number of times to count will be positive numbers greater than 0.
 * Return the results as an array
 *
 * @param int $n
 * @param int $x
 * @return array
 */
function foo(int $n, int $x): array
{
    $result = [];

    for($i = 1; $i <= $x; $i++) {
        $result[] = $n * $i;
    }

    return $result;
}

print_r(foo(1, 10));