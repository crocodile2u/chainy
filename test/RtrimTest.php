<?php

namespace chainy\test;

use chainy\Rtrim;

class RtrimTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param $str
     * @param $chars
     * @param $expected
     * @dataProvider provider_testInvoke
     */
    function testInvoke($str, $chars, $expected)
    {
        $this->assertEquals($expected, (new Rtrim($chars))($str));
    }

    function provider_testInvoke()
    {
        return [
            [" str ", null, " str"],
            ["/.str/...", "/.", "/.str"],
        ];
    }
}