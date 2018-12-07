<?php

namespace chainy\test;

use chainy\Chain;
use PHPUnit\Framework\TestCase;

class ChainTest extends TestCase
{
    function testApplyCallsAllFiltersAndReturnsTheLastResult()
    {
        $f1Called = false;
        $f1 = function() use (&$f1Called) {
            $f1Called = true;
            return 1;
        };

        $f2Called = false;
        $f2Result = 2;
        $f2 = function() use (&$f2Called, $f2Result) {
            $f2Called = true;
            return $f2Result;
        };

        $result = (new Chain())->add($f1)->add($f2)->apply("anything");
        $this->assertEquals($f2Result, $result);
        $this->assertTrue($f1Called);
        $this->assertTrue($f2Called);
    }

    public function testImmutability()
    {
        $chain1 = new Chain();
        $chain2 = $chain1->add(function(){});
        $this->assertEquals(get_class($chain1), get_class($chain2));
        $this->assertNotSame($chain1, $chain2);
    }
}
