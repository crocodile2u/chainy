<?php

namespace chainy\test;

use chainy\Splice;
use PHPUnit\Framework\TestCase;

class SpliceTest extends TestCase
{
    function testNoReplacement()
    {
        $arr = [1, 2, 3];
        $this->assertEquals([2, 3], (new Splice(1, 2))($arr));
        $this->assertEquals([1], $arr);
    }

    function testReplacement()
    {
        $arr = [1, 2, 3];
        $replacement = [10];
        $this->assertEquals([2, 3], (new Splice(1, 2, $replacement))($arr));
        $this->assertEquals([1, 10], $arr);
    }

}
