<?php

namespace Numerals\Services;

interface Generator {

    public function generate($number);
    public function parse($romanNumeral);

}
