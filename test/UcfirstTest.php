<?php

namespace chainy\test;

use chainy\Ucfirst;
use PHPUnit\Framework\TestCase;

class UcfirstTest extends TestCase
{
    /**
     * @param $input
     * @param $expected
     * @dataProvider provider_testInvoke
     */
    function testInvoke($input, $expected)
    {
        $this->assertEquals($expected, (new Ucfirst)($input));
    }

    function provider_testInvoke()
    {
        return [
            ["lower", "Lower"],
            ["UPPER", "UPPER"],
            ["mIxEd", "MIxEd"],
        ];
    }
}
