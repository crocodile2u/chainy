<?php

namespace chainy\test;

use chainy\Rtrim;
use PHPUnit\Framework\TestCase;

class RtrimTest extends TestCase
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
