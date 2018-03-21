<?php

namespace chainy\test;

use chainy\Map;
use PHPUnit\Framework\TestCase;

class MapTest extends TestCase
{
    function testInvoke()
    {
        $this->assertEquals(["LOWER"], (new Map("strtoupper"))(["lower"]));
    }
}
