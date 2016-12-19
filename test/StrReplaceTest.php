<?php

namespace chainy\test;

use chainy\StrReplace;

class StrReplaceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param $str
     * @param $search
     * @param $replacement
     * @dataProvider provider_testInvoke
     */
    function testInvoke($str, $search, $replacement, $expected)
    {
        $this->assertEquals($expected, (new StrReplace($search, $replacement))($str));
    }

    function provider_testInvoke()
    {
        return [
            ["Hillary has won US presidential elections", "Hillary", "Trump", "Trump has won US presidential elections"],
        ];
    }
}