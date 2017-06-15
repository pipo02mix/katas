<?php

namespace spec;

use RomanToLiterals;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanToLiteralsSpec extends ObjectBehavior
{
    function it_should_convert_1_to_I()
    {
        $this->convert(1)->shouldBe('I');
    }

    function it_should_convert_2_to_II()
    {
        $this->convert(2)->shouldBe('II');
    }

    function it_should_convert_3_to_III()
    {
        $this->convert(3)->shouldBe('III');
    }

    function it_should_convert_4_to_IV()
    {
        $this->convert(4)->shouldBe('IV');
    }

    function it_should_convert_5_to_V()
    {
        $this->convert(5)->shouldBe('V');
    }

    function it_should_convert_9_to_IX()
    {
        $this->convert(9)->shouldBe('IX');
    }

    function it_should_convert_40_to_XL()
    {
        $this->convert(40)->shouldBe('XL');
    }

    function it_should_convert_90_to_XC()
    {
        $this->convert(90)->shouldBe('XC');
    }

    function it_should_convert_1349_to_MCCCXLVIV()
    {
        $this->convert(1349)->shouldBe('MCCCXLIX');
    }

    function it_should_not_allow_zero()
    {
        $this->shouldThrow('\InvalidArgumentException')->duringConvert(0);
    }

    function it_should_not_allow_numbers_below_zero()
    {
        $this->shouldThrow('\InvalidArgumentException')->duringConvert(-5);
    }
}
