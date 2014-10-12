<?php

namespace Numerals\Validators;

class RomanNumeralsValidator implements NumeralsValidator {

    public function validate($numeral) {
        if (preg_match('/^M{0,3}(CM|CD|D?C{0,3})(XC|XL|L?X{0,3})(IX|IV|V?I{0,3})$/', $numeral)) {
            return true;
        }
        return false;
    }
}
