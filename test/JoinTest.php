<?php

namespace chainy\test;

use chainy\Join;

class JoinTest extends \PHPUnit_Framework_TestCase
{
    function testInvoke()
    {
        $this->assertEquals("hello world", (new Join(" "))(["hello", "world"]));
    }
}