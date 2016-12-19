<?php

namespace chainy\test;

use chainy\Reverse;

class ReverseTest extends \PHPUnit_Framework_TestCase
{
    function testInvoke()
    {
        $in = [1, 2, 3, 4];
        $this->assertEquals([4, 3, 2, 1], (new Reverse)($in));
    }
}