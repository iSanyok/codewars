<?php
const ALPHABET = [
    'a' => 'Alpha',
    'b' => 'Bravo',
    'c' => 'Charlie',
    'd' => 'Delta',
    'e' => 'Echo',
    'f' => 'Foxtrot',
    'g' => 'Golf',
    'h' => 'Hotel',
    'i' => 'India',
    'j' => 'Juliet',
    'k' => 'Kilo',
    'l' => 'Lima',
    'm' => 'Mike',
    'n' => 'November',
    'o' => 'Oscar',
    'p' => 'Papa',
    'q' => 'Quebec',
    'r' => 'Romeo',
    's' => 'Sierra',
    't' => 'Tango',
    'u' => 'Uniform',
    'v' => 'Victor',
    'w' => 'Whiskey',
    'x' => 'Xray',
    'y' => 'Yankee',
    'z' => 'Zulu',
    '1' => 'One',
    '2' => 'Two',
    '3' => 'Three',
    '4' => 'Four',
    '5' => 'Five',
    '6' => 'Six',
    '7' => 'Seven',
    '8' => 'Eight',
    '9' => 'Nine',
    '0' => 'Zero',
];
/**
 * You'll have to translate a string to Pilot's alphabet (NATO phonetic alphabet).
 *
 * The set of used punctuation is .!?.
 * Punctuation should be kept in your return string, but spaces should not.
 * Xray should not have a dash within.
 * Every word and punctuation mark should be seperated by a space ' '.
 * There should be no trailing whitespace
 *
 * Although the proper alphabet for j is Juliett you have to use Juliet here
 *
 * @param string $str
 * @return string
 */
function foo(string $str): string
{
    $result = '';

    foreach(str_split($str) as $char) {
        if(!ctype_alpha($char))
            $result .= ' ' . $char .' ';
        $result .= ALPHABET[strtolower($char)] . ' ';
    }

    return $result;
}

print foo('IF you, CAN read, THIS?');