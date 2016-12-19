<?php

namespace chainy\test;

use chainy\Uksort;

class UksortTest extends \PHPUnit_Framework_TestCase
{
    function testInvoke()
    {
        $in = [3 => 1, 2 => 1, 4 => 1, 1 => 1];
        $sorter = new Uksort(function($a, $b) {
            return -($a <=> $b);
        });
        $this->assertEquals([4 => 1, 3 => 1, 2 => 1, 1 => 1], $sorter($in));
    }
}