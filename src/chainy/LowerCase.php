<?php

namespace chainy;

class LowerCase
{
    function __invoke($value)
    {
        return mb_strtolower($value);
    }
}
