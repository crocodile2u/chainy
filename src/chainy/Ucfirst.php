<?php

namespace chainy;

class Ucfirst
{
    function __invoke($value)
    {
        return mb_strtoupper(mb_substr($value, 0, 1)) . mb_substr($value, 1);
    }
}
