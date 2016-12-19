<?php

namespace chainy\test;

use chainy\Map;

class MapTest extends \PHPUnit_Framework_TestCase
{
    function testInvoke()
    {
        $this->assertEquals(["LOWER"], (new Map("strtoupper"))(["lower"]));
    }
}