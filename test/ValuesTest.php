<?php

namespace chainy\test;

use chainy\Values;
use PHPUnit\Framework\TestCase;

class ValuesTest extends TestCase
{
    function testInvoke()
    {
        $in = ["key1" => "val1", "key2" => "val2"];
        $this->assertEquals(["val1", "val2"], (new Values)($in));
    }
}
