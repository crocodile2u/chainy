<?php

namespace chainy\test;

use chainy\Sort;

class SortTest extends \PHPUnit_Framework_TestCase
{
    function testInvoke()
    {
        $in = [3, 2, 4, 1];
        $this->assertEquals([1, 2, 3, 4], (new Sort)($in));
    }
}