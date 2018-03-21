<?php

namespace chainy\test;

use chainy\Column;
use PHPUnit\Framework\TestCase;

class ColumnTest extends TestCase
{
    function testInvoke()
    {
        $data = [
            ["id" => 1, "name" => "n1"],
            ["id" => 2, "name" => "n2"],
        ];
        $this->assertEquals([1, 2], (new Column("id"))($data));
        $this->assertEquals(["n1", "n2"], (new Column("name"))($data));
    }
}
