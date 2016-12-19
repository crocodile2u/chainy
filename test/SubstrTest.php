<?php

namespace chainy\test;

use chainy\Substr;

class SubstrTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param $str
     * @param $start
     * @param $length
     * @dataProvider provider_testInvoke
     */
    function testInvoke($str, $start, $length, $expected)
    {
        $this->assertEquals($expected, (new Substr($start, $length))($str));
    }

    function provider_testInvoke()
    {
        return [
            ["Hello world", 0, null, "Hello world"],
            ["Hello world", 0, 5, "Hello"],
            ["Hello world", 5, 5, " worl"],
            ["Hello world", -5, null, "world"],
            ["Hello world", -5, 3, "wor"],
        ];
    }
}