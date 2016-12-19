<?php

namespace chainy\test;

use chainy\Values;

class ValuesTest extends \PHPUnit_Framework_TestCase
{
    function testInvoke()
    {
        $in = ["key1" => "val1", "key2" => "val2"];
        $this->assertEquals(["val1", "val2"], (new Values)($in));
    }
}