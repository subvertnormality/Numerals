<?php

//use Services\RomanNumeralsGenerator;
//
//class RomanNumeralsGeneratorTest extends \TestCase
//{
//
//    private $romanNumeralBaseTenPairs = array(
//        array("I", 1),
//        array("II", 2),
//        array("III", 3),
//        array("IV", 4),
//        array("V", 5),
//        array("VI", 6),
//        array("VII", 7),
//        array("VIII", 8),
//        array("IX", 9),
//        array("X", 10),
//        array("CDII", 402),
//        array("XLIV", 44),
//        array("XCIX", 99),
//        array("MCMIV", 1904),
//        array("MCMLIV", 1954),
//        array("MMXIV", 2014),
//        array("MMMCMXCIX", 3999)
//    );
//
//    /** @var  RomanNumeralsGenerator */
//    private $service;
//
//    function setup()
//    {
//        $this->service = new RomanNumeralsGenerator();
//    }
//
//    /**
//     * @test
//     * @dataProvider romanNumeralProvider
//     */
//    public function testRomanNumeralsConvertToBaseTen($romanNumeral, $expectedBaseTen)
//    {
//        $this->assertEquals($this->service->parse($romanNumeral), $expectedBaseTen);
//    }
//
//    /**
//     * @test
//     * @dataProvider baseTenProvider
//     */
//    public function romanNumeralsShouldConvertToBaseTen($baseTen, $expectedRomanNumeral)
//    {
//        $this->assertEquals($this->service->generate($baseTen), $expectedRomanNumeral);
//    }
//
//
//    public function romanNumeralProvider()
//    {
//        return $this->romanNumeralBaseTenPairs;
//    }
//
//    public function baseTenProvider()
//    {
//        $baseTenRomanNumeralPairs = array();
//
//        foreach ($this->romanNumeralBaseTenPairs as $romanNumeralBaseTenPair) {
//            array_push($baseTenRomanNumeralPairs, array_flip($romanNumeralBaseTenPair));
//        }
//
//        return $baseTenRomanNumeralPairs;
//    }
//
//}
