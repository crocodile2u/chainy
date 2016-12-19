<?php

namespace chainy\test;

use chainy\Reduce;

class ReduceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provider_testInvoke
     */
    function testInvoke($array, $initial, $expected)
    {
        $sum = function($a, $b) {
            return $a + $b;
        };
        $reduce = new Reduce($sum, $initial);
        $this->assertEquals($expected, $reduce($array));
    }

    function provider_testInvoke()
    {
        return [
            [
                [1, 2, 3],
                null,
                6
            ],
            [
                [1, 2, 3],
                10,
                16
            ],
        ];
    }
}