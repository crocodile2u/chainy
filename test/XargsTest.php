<?php

namespace chainy\test;

use chainy\Xargs;
use PHPUnit\Framework\TestCase;

class XargsTest extends TestCase
{
    function testInvoke()
    {
        $f = function ($arg1, $arg2, $arg3) {
            return $arg1 . $arg2 . $arg3;
        };
        $this->assertEquals("hello world", (new Xargs($f))(["hello", " ", "world"]));
    }

    function testInvokeOnNullArg()
    {
        $f = function ($arg1) {
            return null;
        };
        $this->assertNull((new Xargs($f))(null));
    }
}
