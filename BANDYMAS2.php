<?php

class Solution {
    protected $RomanLetters = [
        1000 => "M",
        900 => "CM",
        500 => "D",
        400 => "CD",
        100 => "C",
        90 => "XC",
        50 => "L",
        40 => "XL",
        10 => "X",
        9 => "IX",
        5 => "V",
        4 => "IV",
        1 => "I"
    ];

    public function IntToRoman($value) {
        $romain = '';
        while ($value > 0) {
            foreach ($this->RomanLetters as $key => $letter) {
                if ($value >= $key) {
                    $value -= $key;
                    $romain .= $letter;
                    break;
                }
            }
        }
        return $romain;
    }
}

$solution = new Solution();
echo $solution->IntToRoman(510);
//https://helloacm.com/how-to-convert-arabic-integers-to-roman-numerals/?utm_content=cmp-true
?>