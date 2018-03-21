<?php

namespace chainy\test;

use chainy\Unique;
use PHPUnit\Framework\TestCase;

class UniqueTest extends TestCase
{
    function testInvoke()
    {
        $this->assertEquals([1, 2, 3, 4], (new Unique())([1, 2, 3, 4, 1, 2, 3, 4]));
    }
}
