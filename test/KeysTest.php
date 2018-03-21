<?php

namespace chainy\test;

use chainy\Keys;
use PHPUnit\Framework\TestCase;

class KeysTest extends TestCase
{
    function testInvoke()
    {
        $in = ["key1" => "val1", "key2" => "val2"];
        $this->assertEquals(["key1", "key2"], (new Keys)($in));
    }
}
