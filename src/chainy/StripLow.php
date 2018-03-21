<?php

namespace chainy;

class StripLow
{
    public function __invoke(string $value)
    {
        return preg_replace("/[\x{0}-\x{1f}]/", "", $value);
    }
}
