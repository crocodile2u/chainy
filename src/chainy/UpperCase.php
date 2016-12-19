<?php

namespace chainy;

class UpperCase
{
    function __invoke($value)
    {
        return mb_strtoupper($value);
    }
}