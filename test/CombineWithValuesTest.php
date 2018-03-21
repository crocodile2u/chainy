<?php

namespace chainy\test;

use chainy\CombineWithValues;
use PHPUnit\Framework\TestCase;

class CombineWithValuesTest extends TestCase
{
    function testInvoke()
    {
        $keys = ["k1", "k2"];
        $values = ["v1", "v2"];
        $combined = [
            "k1" => "v1",
            "k2" => "v2",
        ];
        $this->assertEquals($combined, (new CombineWithValues($values))($keys));
    }
}
