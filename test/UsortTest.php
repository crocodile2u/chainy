<?php

namespace chainy\test;

use chainy\Usort;

class UsortTest extends \PHPUnit_Framework_TestCase
{
    function testInvoke()
    {
        $in = [3, 2, 4, 1];
        $sorter = new Usort(function($a, $b) {
            return -($a <=> $b);
        });
        $this->assertEquals([4, 3, 2, 1], $sorter($in));
    }
}