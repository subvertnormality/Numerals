<?php

namespace Numerals\Services;

use Numerals\Services\Processors\Processor;

class NumeralsGenerator implements Generator {

    private $generator;
    private $parser;

    public function __construct(Processor $generator, Processor $parser) {
        $this->generator = $generator;
        $this->parser = $parser;
    }

    public function generate($number) {
        return $this->generator->process($number);
    }

    public function parse($numeral) {
        return $this->parser->process($numeral);
    }
}
