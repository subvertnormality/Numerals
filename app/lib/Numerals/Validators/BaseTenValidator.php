<?php

namespace Numerals\Validators;

class BaseTenValidator implements Validator {

    public function validate($numeral) {
        $isWholeInteger = preg_match("/^[0-9]*$/", $numeral);
        $integerValue = intval($numeral);
        if ($isWholeInteger && $integerValue > 0 && $integerValue < 4000) {
            return true;
        }
        return false;
    }
}
