<?php

namespace chainy\test;

use chainy\Map;
use chainy\MapKeyValue;
use PHPUnit\Framework\TestCase;

class MapKeyValueTest extends TestCase
{
    function testInvoke()
    {
        $input = ["key" => "val"];
        $transform = function($value, $key) {
            return "$key:$value";
        };
        $this->assertEquals(["key" => "key:val"], (new MapKeyValue($transform))($input));
    }
}
