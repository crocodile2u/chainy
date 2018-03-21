<?php

namespace chainy\test;

use chainy\Join;
use PHPUnit\Framework\TestCase;

class JoinTest extends TestCase
{
    function testInvoke()
    {
        $this->assertEquals("hello world", (new Join(" "))(["hello", "world"]));
    }
}
