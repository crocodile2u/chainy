<?php

namespace chainy\test;

use chainy\Sort;
use PHPUnit\Framework\TestCase;

class SortTest extends TestCase
{
    function testInvoke()
    {
        $in = [3, 2, 4, 1];
        $this->assertEquals([1, 2, 3, 4], (new Sort)($in));
    }
}
