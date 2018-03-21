<?php

namespace chainy\test;

use chainy\Trim;
use PHPUnit\Framework\TestCase;

class TrimTest extends TestCase
{
    /**
     * @param $str
     * @param $chars
     * @param $expected
     * @dataProvider provider_testInvoke
     */
    function testInvoke($str, $chars, $expected)
    {
        $this->assertEquals($expected, (new Trim($chars))($str));
    }

    function provider_testInvoke()
    {
        return [
            [" str ", null, "str"],
            ["/.str/...", "/.", "str"],
        ];
    }
}
