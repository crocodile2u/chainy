<?php

namespace chainy\test;

use chainy\Capitalize;

class CapitalizeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param $input
     * @param $expected
     * @dataProvider provider_testInvoke
     */
    function testInvoke($input, $expected)
    {
        $this->assertEquals($expected, (new Capitalize)($input));
    }

    function provider_testInvoke()
    {
        return [
            ["lower", "Lower"],
            ["UPPER", "Upper"],
            ["mIxEd", "Mixed"],
        ];
    }
}