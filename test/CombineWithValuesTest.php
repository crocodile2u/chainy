<?php

namespace chainy\test;

use chainy\CombineWithValues;

class CombineWithValuesTest extends \PHPUnit_Framework_TestCase
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