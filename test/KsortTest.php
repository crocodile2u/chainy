<?php

namespace chainy\test;

use chainy\Ksort;
use PHPUnit\Framework\TestCase;

class KsortTest extends TestCase
{
    function testInvoke()
    {
        $in = [3 => 1, 2 => 1, 4 => 1, 1 => 1];
        $this->assertEquals([1 => 1, 2 => 1, 3 => 1, 4 => 1], (new Ksort)($in));
    }
}
