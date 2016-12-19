<?php

namespace chainy\test;

use chainy\Keys;

class KeysTest extends \PHPUnit_Framework_TestCase
{
    function testInvoke()
    {
        $in = ["key1" => "val1", "key2" => "val2"];
        $this->assertEquals(["key1", "key2"], (new Keys)($in));
    }
}