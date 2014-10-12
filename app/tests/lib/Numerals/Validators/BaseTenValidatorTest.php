<?php

use Numerals\Validators\BaseTenValidator;


class BaseTenValidatorTest extends \TestCase
{

    private $service;

    public function setup() {
        $this->service = new BaseTenValidator();
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
            array("1", true),
            array("123", true),
            array("1234", true),
            array("3999", true),
            array(1, true),
            array(123, true),
            array(1234, true),
            array(3999, true),
            // Invalid
            // Too low
            array("0", false),
            array("-12", false),
            array(0, false),
            array(-12, false),
            // Too high
            array("4000", false),
            array("3242345", false),
            array(4000, false),
            array(3242345, false),
            // Decimals not allowed
            array("1.2", false),
            array(1.2, false),
            // Invalid char
            array("123x", false),
            array("IO", false)
        );
    }

}
