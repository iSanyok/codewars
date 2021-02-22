<?php
/**
 *Let us consider this example (array written in general format):

 *ls = [0, 1, 3, 6, 10]

 *Its following parts:

 *ls = [0, 1, 3, 6, 10]
 *ls = [1, 3, 6, 10]
 *ls = [3, 6, 10]
 *ls = [6, 10]
 *ls = [10]
 *ls = []
 *The corresponding sums are (put together in a list): [20, 20, 19, 16, 10, 0]
 * @param array $arr
 * @return array
 */
function foo(array $arr): array
{
    $result = [];

    foreach ($arr as $key => $el)
    {
        $result[] = array_sum($arr);
        unset($arr[$key]);
    }

    $result[] = 0;
    return $result;
}

print_r(foo([0, 1, 3, 6, 10, 10]));
print_r(foo([744125, 935, 407, 454, 430, 90, 144, 6710213, 889, 810, 2579358]));