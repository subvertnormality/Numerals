<?php

use Numerals\Services\NumeralsGenerator;


class NumeralsGeneratorTest extends \TestCase
{

    /** @var  NumeralsGenerator */
    private $service;

    private $generatorStub;
    private $parserStub;

    function setup()
    {
        $this->generatorStub = $this->getMock('Numerals\Services\Processors\NumeralsProcessor');
        $this->parserStub = $this->getMock('Numerals\Services\Processors\NumeralsProcessor');
        $this->service = new NumeralsGenerator($this->generatorStub, $this->parserStub);
    }

    /**
     * @test
     */
    public function testNumeralsGenerate()
    {
        $this->generatorStub->expects($this->any())
            ->method('process')
            ->will($this->returnValue('Result'));

        $this->assertEquals($this->service->generate(123), 'Result');
    }

    /**
     * @test
     */
    public function testNumeralsParse()
    {
        $this->parserStub->expects($this->any())
            ->method('process')
            ->will($this->returnValue('Result'));

        $this->assertEquals($this->service->parse('XX'), 'Result');
    }
}
