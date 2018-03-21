<?php

namespace chainy\test;

use chainy\Each;
use PHPUnit\Framework\TestCase;

class EachTest extends TestCase
{
    function testCallbackIsCalledOnEveryElementWithCorrectArgs()
    {
        $calls = [];
        $f = function() use (&$calls) {
            $calls[] = func_get_args();
        };
        $in = ["key1" => "val1", "key2" => "val2"];
        $this->assertEquals($in, (new Each($f))($in));
        $this->assertCount(count($in), $calls);
        $this->assertEquals(["val1", "key1"], $calls[0]);
        $this->assertEquals(["val2", "key2"], $calls[1]);
    }
}
