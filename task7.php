<?php
/**
 * Your task is to write a function which returns the sum of following series upto nth term(parameter).
 * Rules:
 * You need to round the answer to 2 decimal places and return it as String.
 * If the given value is 0 then it should return 0.00
 * You will only be given Natural Numbers as arguments.
 *
 * @param int $num
 * @return string
 */
function foo(int $num): string
{
    if($num === 0) {
        return '0.00';
    }

    $result = 1;
    $reverage = 1;

    for($i = 1; $i < $num; $i++) {
        $reverage += 3;
        $result += 1 / $reverage;
    }
    return strval(round($result, 2));
}

print foo(1);