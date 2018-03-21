<?php

namespace chainy\test;

use chainy\LowerCase;
use PHPUnit\Framework\TestCase;

class LowerCaseTest extends TestCase
{
    /**
     * @param $input
     * @param $expected
     * @dataProvider provider_testInvoke
     */
    function testInvoke($input, $expected)
    {
        $this->assertEquals($expected, (new LowerCase)($input));
    }

    function provider_testInvoke()
    {
        return [
            ["lower", "lower"],
            ["UPPER", "upper"],
            ["mIxEd", "mixed"],
        ];
    }
}
