<?php

namespace chainy\test;

use chainy\LowerCase;

class LowerCaseTest extends \PHPUnit_Framework_TestCase
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