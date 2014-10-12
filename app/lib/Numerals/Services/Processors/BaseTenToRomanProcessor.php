<?php

namespace Numerals\Services\Processors;

use Numerals\Validators\Validator;

class BaseTenToRomanProcessor implements Processor {

    private $validator;

    private $baseTenValues = array(
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
    );

    public function __construct(Validator $validator) {
        $this->validator = $validator;
    }

    public function process($number) {
        if (!$this->validator->validate($number)) {
            return false;
        }

        $result = "";
        foreach($this->baseTenValues as $value => $numeral) {
            while ($number > 0 && ($number - $value) > -1) {
                $result .= $numeral;
                $number -= $value;
            }
        }
        return $result;
    }
}
