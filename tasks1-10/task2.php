<?php
/**
 * Given an array of integers (x), and a target (t), you must find out if any two consecutive numbers in the array sum to t.
 * If so, remove the second number.
 *
 * Example:
 * x = [1, 2, 3, 4, 5]
 * t = 3
 * 1+2 = t, so remove 2. No other pairs = t, so rest of array remains:
 * [1, 3, 4, 5]
 * Work through the array from left to right.
 * Return the resulting array.
 *
 * @param int $t
 * @param array $x
 * @return array
 */
function foo(array $x, int $t): array
{
    for($i = 0; $i <= count($x); $i++) {
        if($t == ($x[$i] + $x[$i + 1])) {
            array_splice($x, $i + 1, 1);
            $i--;
        }
    }
    return $x;
}

print_r(foo([41231, 13213123, 111111, 133232, 44343434, 5454566, 5454566, 123123, 443434355, 62451, 3232, 6463333, 1212333333, 43451231], 10909132));