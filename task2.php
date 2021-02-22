<?php
/**
 * Given an array of integers (x), and a target (t), you must find out if any two consecutive numbers in the array sum to t.
 * If so, remove the second number.
 * Example:
 * x = [1, 2, 3, 4, 5]
 * t = 3
 * 1+2 = t, so remove 2. No other pairs = t, so rest of array remains:
 * [1, 3, 4, 5]
 * Work through the array from left to right.
 * Return the resulting array.
 * @param array $x
 * @return array
 */
function foo(array $x, int $t): array
{
    foreach ($x as $key => $value)
    {
        if($t == ($x[$key] + $x[$key + 1]))
        {
            unset($x[$key + 1]);
            return $x;
        }
    }

    return $x;
}

print_r(foo([1, 2, 3, 4, 5], 3));