<?php

namespace chainy\test;

use chainy\Reduce;
use chainy\ReduceKeyValue;
use PHPUnit\Framework\TestCase;

class ReduceKeyValueTest extends TestCase
{
    /**
     * @dataProvider provider_testInvoke
     */
    function testInvoke($array, $initial, $expected)
    {
        $func = function($carry, $item, $key) {
            return $carry . ":" . $key . ":" . $item;
        };
        $reduce = new ReduceKeyValue($func, $initial);
        $this->assertEquals($expected, $reduce($array));
    }

    function provider_testInvoke()
    {
        return [
            [
                ["k1" => "v1"],
                null,
                ":k1:v1"
            ],
            [
                ["k1" => "v1", "k2" => "v2"],
                "prefix",
                "prefix:k1:v1:k2:v2"
            ],
        ];
    }
}
