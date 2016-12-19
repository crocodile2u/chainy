<?php

namespace chainy\test;

use chainy\Ksort;

class KsortTest extends \PHPUnit_Framework_TestCase
{
    function testInvoke()
    {
        $in = [3 => 1, 2 => 1, 4 => 1, 1 => 1];
        $this->assertEquals([1 => 1, 2 => 1, 3 => 1, 4 => 1], (new Ksort)($in));
    }
}