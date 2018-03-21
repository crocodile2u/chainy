<?php

namespace chainy\test;

use chainy\Slice;
use PHPUnit\Framework\TestCase;

class SliceTest extends TestCase
{
    function testInvoke()
    {
        $arr = [1, 2, 3];
        $this->assertNumericSlices($arr);
    }

    function testPreserveKeys()
    {
        $arr = [1, 2, 3];
        $this->assertNumericSlices($arr);
        $this->assertEquals([1 => 2, 2 => 3], (new Slice(1, 2, true))($arr));
    }

    function testStringKeysAreAlwaysPreserved()
    {
        $arr = ["a" => 1, "b" => 2, "c" => 3];
        $this->assertEquals(["b" => 2, "c" => 3], (new Slice(1, 2, false))($arr));
        $this->assertEquals(["b" => 2, "c" => 3], (new Slice(1, 2, true))($arr));
    }

    protected function assertNumericSlices($arr)
    {
        $this->assertEquals([1, 2], (new Slice(0, 2, false))($arr));
        $this->assertEquals([2, 3], (new Slice(1, null, false))($arr));
        $this->assertEquals([2, 3], (new Slice(1, 2, false))($arr));
    }
}
