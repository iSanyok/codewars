<?php

/**
 * Given an array of integers.
 * Return an array, where the first element is the count of positives numbers and the second element is sum of negative numbers.
 * If the input array is empty or null, return an empty array.
 * @param array $arr
 * @return array
 */
function foo(array $arr): array
{
    $result = [];

    if(empty($arr))
        return [];

    foreach ($arr as $el)
    {
        $el > 0 ? $result[0] += 1 : $result[1] += $el;
    }

    return $result;
}

print_r(foo([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15]));
