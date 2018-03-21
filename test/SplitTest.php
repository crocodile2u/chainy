<?php

namespace chainy\test;

use chainy\Split;
use PHPUnit\Framework\TestCase;

class SplitTest extends TestCase
{
    function testInvoke()
    {
        $this->assertEquals(["hello", "world"], (new Split(" "))("hello world"));
    }
}
