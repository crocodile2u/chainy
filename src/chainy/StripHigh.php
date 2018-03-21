<?php

namespace chainy;

class StripHigh
{
    public function __invoke(string $value)
    {
        return preg_replace("/[\x{80}-\x{ff}]/", "", $value);
    }
}
