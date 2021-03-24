<?php
/**
 * Binary search
 *
 * @param array $arr
 * @param int $item
 * @return mixed|string
 */
function binarySearch(array $arr, int $item): mixed
{
    $low = 0;
    $high = count($arr);

    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);
        $guess = $arr[$mid];

        if ($guess == $item) {
            return $guess;
        } else if ($guess > $item) {
            $high = $mid - 1;
        } else {
            $low = $mid + 1;
        }
    }

    return 'mda...';
}

print_r(binarySearch([1, 3, 5, 7, 9, 11, 15, 20, 22, 25], 20));