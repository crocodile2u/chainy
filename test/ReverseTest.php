<?php

namespace chainy\test;

use chainy\Reverse;
use PHPUnit\Framework\TestCase;

class ReverseTest extends TestCase
{
    function testInvoke()
    {
        $in = [1, 2, 3, 4];
        $this->assertEquals([4, 3, 2, 1], (new Reverse)($in));
    }
}
