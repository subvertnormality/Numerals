<?php

use Numerals\Services\NumeralsGenerator;
use Numerals\Services\Processors\RomanToBaseTenProcessor;
use Numerals\Services\Processors\BaseTenToRomanProcessor;
use Numerals\Validators\BaseTenValidator;
use Numerals\Validators\RomanNumeralsValidator;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Input;

class RomanNumeralController extends BaseController {

    private $romanNumeralGenerator;

    public function __construct() {
        $this->constructGenerator();
    }

    public function parseRomanNumeral()
    {
        $numeral = Input::get('numeral');
        $result = $this->romanNumeralGenerator->parse($numeral);

        return Response::json(array('result' => $result));
    }

    public function generateRomanNumeral()
    {
        $number = Input::get('numeral');
        $result = $this->romanNumeralGenerator->generate($number);

        return Response::json(array('result' => $result));
    }

    private function constructGenerator() {
        $baseTenValidator = new BaseTenValidator();
        $romanNumeralsValidator = new RomanNumeralsValidator();
        $baseTenToRomanProcessor = new BaseTenToRomanProcessor($baseTenValidator);
        $romanToBaseTenProcessor = new RomanToBaseTenProcessor($romanNumeralsValidator);
        $this->romanNumeralGenerator = new NumeralsGenerator($baseTenToRomanProcessor, $romanToBaseTenProcessor);
    }
}
