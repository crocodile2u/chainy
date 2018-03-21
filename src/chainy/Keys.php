<?php

namespace chainy;

class Keys
{
    public function __invoke(array $value)
    {
        return array_keys($value);
    }
}
