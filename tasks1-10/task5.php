<?php
/**
 * Write an algorithm that takes an array and moves all of the zeros to the end,
 * preserving the order of the other elements.
 * @param array $arr
 * @return array
 */
function foo(array $arr): array
{
    foreach($arr as $key => $el)
    {
        if($el === 0)
        {
            unset($arr[$key]);
            $arr[] = $el;
        }
    }

    return array_values($arr);
}

print_r(foo([false,1,0,1,2,0,1,3,"a"]));