<?php

namespace chainy;

class Capitalize
{
    function __invoke($value)
    {
        return mb_strtoupper(mb_substr($value, 0, 1)) . mb_strtolower(mb_substr($value, 1));
    }
}
