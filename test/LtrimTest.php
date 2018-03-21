<?php

namespace chainy\test;

use chainy\Ltrim;
use PHPUnit\Framework\TestCase;

class LtrimTest extends TestCase
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
