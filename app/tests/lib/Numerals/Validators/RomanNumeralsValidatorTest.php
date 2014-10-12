<?php

use Numerals\Validators\RomanNumeralsValidator;

class NumeralsValidatorTest extends \TestCase
{

    private $service;

    public function setup() {
        $this->service = new RomanNumeralsValidator();
    }

    /**
     * @test
     * @dataProvider romanNumeralProvider
     */
    public function testValidator($numeral, $validationResult)
    {
        $this->assertEquals($this->service->validate($numeral), $validationResult);
    }

    public function romanNumeralProvider()
    {
        return array(
            // Valid
            array('I', true),
            array('II', true),
            array('III', true),
            array('IV', true),
            array('V', true),
            array('VI', true),
            array('VII', true),
            array('VIII', true),
            array('IX', true),
            array('X', true),
            array('CDII', true),
            array('XLIV', true),
            array('XCIX', true),
            array('MCMIV', true),
            array('MCMLIV', true),
            array('MMXIV', true),
            array('MMMCMXCIX', true),
            // Invalid
            // Too high
            array('MMMMCMXCIX', false),
            // Wrong order
            array('XMMMCMXCIX', false),
            array('MMIMCMXCIX', false),
            // Invalid char
            array('MMMGMXCIX', false),
            array('IO', false),
            array('123', false),
            // Four repeated values
            array('MMMCMXCCCCIX', false),
            array('IIII', false),
            array('MMMMCMXCIX', false)
        );
    }

}
