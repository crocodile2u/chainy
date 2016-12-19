<?php

namespace chainy\test;

use chainy\Unique;

class UniqueTest extends \PHPUnit_Framework_TestCase
{
    function testInvoke()
    {
        $this->assertEquals([1, 2, 3, 4], (new Unique())([1, 2, 3, 4, 1, 2, 3, 4]));
    }
}