<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 06.03.18
 * Time: 11:52
 */

/*
 * Write a function that takes a string input, and returns the first character that is not repeated anywhere in the string.

For example, if given the input 'stress', the function should return 't', since the letter t only occurs once in the string, and occurs first in the string.

As an added challenge, upper- and lowercase letters are considered the same character, but the function should return the correct case for the initial letter. For example, the input 'sTreSS' should return 'T'.

If a string contains all repeating characters, it should return the empty string ("").
 */

/**
 * @param $str
 * @return int|string
 */
function first_non_repeating_letter ($str) {
    $repeats = [];
    for ($i = 0, $l = strlen($str); $i < $l; ++$i) {
        $key = strtolower($str[$i]);
        if (! array_key_exists($key, $repeats)) {
            $repeats[$key] = 0;
        } else {
            ++$repeats[$key];
        }
    }

    $norepeats = array_search(0, $repeats);
    if (false === $norepeats) {
        return '';
    }

    $pos = stripos($str, $norepeats);
    return $str[$pos];
}

//print_r(first_non_repeating_letter("a"));
//print_r(first_non_repeating_letter("stress"));
//print_r(first_non_repeating_letter("moonmen"));
//print_r(first_non_repeating_letter("moonmeen"));
print_r(first_non_repeating_letter("sTreSS"));
