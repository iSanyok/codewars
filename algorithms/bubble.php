<?php
function foo(array $arr): array
{
    for ($i = 0; $i < $size = count($arr); $i++) {
        for ($j = $size - 1; $j > $i; $j--) {
            if ($arr[$j - 1] > $arr[$j]) {
                $res = $arr[$j - 1];
                $arr[$j - 1] = $arr[$j];
                $arr[$j] = $res;
            }
        }
    }

    return $arr;
}

print_r(foo($arr = [4, 9, 7, 6, 2, 3, 1, 16]));