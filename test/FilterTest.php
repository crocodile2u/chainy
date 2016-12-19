<?php

namespace chainy\test;

use chainy\Filter;

class FilterTest extends \PHPUnit_Framework_TestCase
{
    function testDefaultFiltering()
    {
        $this->assertEquals([3 => "value"], (new Filter())(["", false, 0, "value", []]));
    }

    function testCustomFiltering()
    {
        $f = function($s) {
            return $s > 2;
        };
        $this->assertEquals([10, 20], (new Filter($f))([10, 20, 0, -1, 1]));
    }
}