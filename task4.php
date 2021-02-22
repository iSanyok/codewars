<?php
/**
 * Write a program that finds the summation of every number from 1 to num.
 * The number will always be a positive integer greater than 0.
 * @param int $num
 * @return int
 */
function foo(int $num): int
{
    return array_sum(range(1, $num));
}
print_r(foo(100));