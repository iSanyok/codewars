<?php
/**
 * Given a lottery ticket (ticket), represented by an array of 2-value arrays, you must find out if you've won the jackpot.
 *
 * To do this, you must first count the 'mini-wins' on your ticket.
 * Each subarray has both a string and a number within it.
 * If the character code of any of the characters in the string matches the number, you get a mini win.
 * Note you can only have one mini win per sub array.
 * Once you have counted all of your mini wins, compare that number to the other input provided (win).
 * If your total is more than or equal to (win), return 'Winner!'. Else return 'Loser!'.
 * All inputs will be in the correct format. Strings on tickets are not always the same length.
 *
 * @param array $ticket
 * @param int $win
 * @return string
 */
function lottery(array $ticket, int $win): string
{
    $mini_wins = 0;

    foreach($ticket as $item) {
        $char_codes = array_map(function ($char) { return ord($char); }, str_split($item[0]));
        $mini_wins +=  in_array($item[1], $char_codes)? 1 : 0;
    }

    return $mini_wins >= $win? 'Winner!' : 'Loser!';
}

print_r (lottery([ [ 'ABC', 65 ], [ 'HGR', 74 ], [ 'BYHT', 74 ] ], 3));
print_r (lottery([ [ 'AAC', 65 ], [ 'ABC', 65 ], [ 'ABC', 65 ] ], 2));
