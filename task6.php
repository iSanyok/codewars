<?php
/**
 * Everyone knows passphrases. One can choose passphrases from poems, songs, movies names and so on but frequently they
 * can be guessed due to common cultural references. You can get your passphrases stronger by different means.
 * One is the following:

 * choose a text in capital letters including or not digits and non alphabetic characters,

 * 1.shift each letter by a given number but the transformed letter must be a letter (circular shift),
 * 2.replace each digit by its complement to 9,
 * 3.keep such as non alphabetic and non digit characters,
 * 4.downcase each letter in odd position, upcase each letter in even position (the first character is in position 0),
 * 5.reverse the whole result.
 *
 * @param string $str
 * @param int $shift
 * @return string
 */
function foo(string $str, int $shift): string
{
    $alphas = range('A', 'Z');
    $result = [];
    foreach(str_split($str) as $key => $el)
    {
        if (is_numeric($el))
        {
            $result[] = 9 - $el;
        } else if (ctype_alpha($el)) {

            $alpha = array_search($el, $alphas);
            $result[] = $alphas[$alpha + $shift];

            if(($key + 1) % 2 == 0)
            {
                $index = array_key_last($result);
                $result[$index] = strtolower($result[$index]);
            }
        } else {
            $result[] = $el;
        }
    }

    $result = implode(array_reverse($result));
    return $result;
}

print foo('BORN IN 2015!', 1);
