<?php

namespace chainy\test;

use chainy\UpperCase;
use PHPUnit\Framework\TestCase;

class UpperCaseTest extends TestCase
{
    /**
     * @param $input
     * @param $expected
     * @dataProvider provider_testInvoke
     */
    function testInvoke($input, $expected)
    {
        $this->assertEquals($expected, (new UpperCase)($input));
    }

    function provider_testInvoke()
    {
        return [
            ["lower", "LOWER"],
            ["UPPER", "UPPER"],
            ["mIxEd", "MIXED"],
        ];
    }
}
