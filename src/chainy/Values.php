<?php

namespace chainy;

class Values
{
    public function __invoke(array $value)
    {
        return array_values($value);
    }
}