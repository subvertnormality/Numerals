<?php

namespace Numerals\Services\Processors;

use Numerals\Validators\Validator;

class RomanToBaseTenProcessor implements Processor {

    private $validator;

    private $romanNumeralDigits = array(
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000
    );

    private $romanNumeralCompounds = array(
        "IV" => 4,
        "IX" => 9,
        "XL" => 40,
        "XC" => 90,
        "CD" => 400,
        "CM" => 900
    );

    public function __construct(Validator $validator) {
        $this->validator = $validator;
    }

    public function process($numeral) {
        if (!$this->validator->validate($numeral)) {
            return false;
        }

        $result = 0;

        foreach($this->romanNumeralCompounds as $compound => $value) {
            $numeral = str_replace($compound, "", $numeral, $count);
            $result += $count * $value;
        }

        foreach($this->romanNumeralDigits as $digit => $value) {
            $numeral = str_replace($digit, "", $numeral, $count);
            $result += $count * $value;
        }

        return $result;
    }
}
