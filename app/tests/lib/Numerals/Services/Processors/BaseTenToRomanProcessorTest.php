<?php

use Numerals\Services\Processors\BaseTenToRomanProcessor;

class BaseTenToRomanProcessorTest extends \TestCase
{

    /** @var  NumeralsGenerator */
    private $service;

    private $validatorStub;

    function setup()
    {
        $this->validatorStub = $this->getMock('Numerals\Validators\Validator');
        $this->service = new BaseTenToRomanProcessor($this->validatorStub);
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
     * @dataProvider baseTenProvider
     */
    public function testValidNumberParseToRomanNumeral($baseTen, $expectedNumeral)
    {
        $this->validatorStub->expects($this->any())
            ->method('validate')
            ->will($this->returnValue(true));

        $this->assertEquals($this->service->process($baseTen), $expectedNumeral);
    }


    public function baseTenProvider()
    {
        return array(
            array(1, 'I'),
            array(2, 'II'),
            array(3, 'III'),
            array(4, 'IV'),
            array(5, 'V'),
            array(6, 'VI'),
            array(7, 'VII'),
            array(8, 'VIII'),
            array(9, 'IX'),
            array(10, 'X'),
            array(402, 'CDII'),
            array(44, 'XLIV'),
            array(99, 'XCIX'),
            array(1904, 'MCMIV'),
            array(1954, 'MCMLIV'),
            array(2014, 'MMXIV'),
            array(3999, 'MMMCMXCIX')
        );
    }
}
