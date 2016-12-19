<?php

namespace chainy\test;

use chainy\Ltrim;

class LtrimTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param $str
     * @param $chars
     * @param $expected
     * @dataProvider provider_testInvoke
     */
    function testInvoke($str, $chars, $expected)
    {
        $this->assertEquals($expected, (new Ltrim($chars))($str));
    }

    function provider_testInvoke()
    {
        return [
            [" str ", null, "str "],
            ["/.str/...", "/.", "str/..."],
        ];
    }
}