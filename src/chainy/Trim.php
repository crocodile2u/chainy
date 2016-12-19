<?php

namespace chainy;

class Trim extends BaseTrim
{
    public function __invoke(string $value)
    {
        return trim($value, $this->chars);
    }
}