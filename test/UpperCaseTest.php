<?php

namespace chainy\test;

use chainy\UpperCase;

class UpperCaseTest extends \PHPUnit_Framework_TestCase
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