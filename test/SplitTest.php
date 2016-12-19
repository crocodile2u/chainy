<?php

namespace chainy\test;

use chainy\Split;

class SplitTest extends \PHPUnit_Framework_TestCase
{
    function testInvoke()
    {
        $this->assertEquals(["hello", "world"], (new Split(" "))("hello world"));
    }
}