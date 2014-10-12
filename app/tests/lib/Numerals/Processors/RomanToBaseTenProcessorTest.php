<?php

use Numerals\Services\Processors\RomanToBaseTenProcessor;

class RomanToBaseTenProcessorTest extends \TestCase
{

    /** @var  NumeralsGenerator */
    private $service;

    private $validatorStub;

    function setup()
    {
        $this->validatorStub = $this->getMock('Numerals\Validators\NumeralsValidator');
        $this->service = new RomanToBaseTenProcessor($this->validatorStub);
    }

    /**
     * @test
     */
    public function testFailedValidationReturnsFalse()
    {
        $this->validatorStub->expects($this->any())
            ->method('validate')
            ->will($this->returnValue(false));

        $this->assertEquals($this->service->process('XXXX'), false);
    }

    /**
     * @test
     * @dataProvider romanNumeralProvider
     */
    public function testValidRomanNumeralsParseToBaseTen($romanNumeral, $expectedBaseTen)
    {
        $this->validatorStub->expects($this->any())
            ->method('validate')
            ->will($this->returnValue(true));

        var_dump($this->service->process($romanNumeral));
        var_dump($expectedBaseTen);
        $this->assertEquals($this->service->process($romanNumeral), $expectedBaseTen);
    }


    public function romanNumeralProvider()
    {
        return array(
            array("I", 1),
            array("II", 2),
            array("III", 3),
            array("IV", 4),
            array("V", 5),
            array("VI", 6),
            array("VII", 7),
            array("VIII", 8),
            array("IX", 9),
            array("X", 10),
            array("CDII", 402),
            array("XLIV", 44),
            array("XCIX", 99),
            array("MCMIV", 1904),
            array("MCMLIV", 1954),
            array("MMXIV", 2014),
            array("MMMCMXCIX", 3999)
        );
    }
}
