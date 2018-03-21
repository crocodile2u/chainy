<?php

namespace chainy\test;

use chainy\Merge;
use PHPUnit\Framework\TestCase;

class MergeTest extends TestCase
{
    function testCallbackIsCalledOnEveryElementWithCorrectArgs()
    {
        $in = [1];
        $arg1 = [2];
        $this->assertEquals([1, 2], (new Merge($arg1))($in));


        $arg2 = [3];
        $this->assertEquals([1, 2, 3], (new Merge($arg1, $arg2))($in));
    }
}
