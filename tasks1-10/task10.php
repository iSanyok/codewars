<?php
/**
 * Complete the solution so that it reverses all of the words within the string passed in.
 *
 * @param string $str
 * @return string
 */
function foo(string $str): string
{
    return implode(' ', array_reverse(explode(' ', $str)));
}

print foo('The greatest victory is that which requires no battle');