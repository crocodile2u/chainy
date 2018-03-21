<?php

namespace chainy\test;

use chainy\StripTags;
use PHPUnit\Framework\TestCase;

class StripTagsTest extends TestCase
{
    /**
     * @param $input
     * @param $allowed
     * @param $expected
     * @dataProvider provider_testInvoke
     */
    function testInvoke($input, $allowed, $expected)
    {
        $this->assertEquals($expected, (new StripTags($allowed))($input));
    }

    function provider_testInvoke()
    {
        return [
            ["string without tags", "", "string without tags"],
            ["<div>some <p>text</p></div>", "", "some text"],
            ["<div>some <p>text</p></div>", "<p>", "some <p>text</p>"],
            ["<div>some <p attr=\"value\">text</p></div>", "<p>", "some <p attr=\"value\">text</p>"],
        ];
    }
}
