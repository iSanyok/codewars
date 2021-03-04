<?php
/**
 * You will be given a number and you will need to return it as a string in Expanded Form.
 * NOTE: All numbers will be whole numbers greater than 0.
 * 
 * @param int $num
 * @return string
 */
function foo(int $num): string
{
    $num = str_split(strval($num));
    $result = '';

    foreach($num as $key => $digit) {
        if($digit == 0)
            continue;
        $result .= $digit . str_repeat('0', count(array_slice($num, $key, -1))) . ' + ';
    }

    return substr($result, 0, -2);
}

print foo(70304);
