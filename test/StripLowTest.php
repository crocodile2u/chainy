<?php

namespace chainy\test;

use chainy\StripLow;
use PHPUnit\Framework\TestCase;

class StripLowTest extends TestCase
{
    /**
     * @param $input
     * @param $expected
     * @dataProvider provider_testInvoke
     */
    function testInvoke($input, $expected)
    {
        $this->assertEquals($expected, (new StripLow)($input));
    }

    function provider_testInvoke()
    {
        return [
            ["normal string", "normal string"],
            ["\x1", ""],
            ["some \x1 string with strange characters", "some  string with strange characters"],
        ];
    }
}
