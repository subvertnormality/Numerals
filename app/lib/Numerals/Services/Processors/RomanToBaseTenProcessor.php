<?php

namespace Numerals\Services\Processors;

use Numerals\Validators\NumeralsValidator;

class RomanToBaseTenProcessor implements NumeralsProcessor {

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

    public function __construct(NumeralsValidator $validator) {
        $this->validator = $validator;
    }

    public function process($numeral) {
        if (!$this->validator->validate($numeral)) {
            return false;
        }

        return '1234'; //TODO
    }
}
