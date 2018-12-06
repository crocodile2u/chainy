<?php

namespace chainy\test;

use chainy\Filter;
use PHPUnit\Framework\TestCase;

class FilterTest extends TestCase
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

    /**
     * Array for testing flag filter
     * @var array
     */
    protected $array = ["a" => 1, "b" => 2, "c" => 3, "d" => 4];

    function testDefaultFlagFiltering()
    {
        $f = function($v) {
            return $v === 1;
        };
        $this->assertEquals(["a" => 1], (new Filter($f))($this->array));
    }

    function testKeyFlagFiltering()
    {
        $f = function($k) {
            return $k === "c";
        };
        $this->assertEquals(["c" => 3], (new Filter($f))($this->array));
    }

    function testBothFlagFiltering()
    {
        $f = function($v, $k) {
            return $v === 4 or $k === "b";
        };
        $this->assertEquals(["b" => 2, "d" => 4], (new Filter($f))($this->array));
    }
}
