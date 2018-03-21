<?php

namespace chainy;

class Reverse
{
    public function __invoke(array $value)
    {
        return array_reverse($value);
    }
}
