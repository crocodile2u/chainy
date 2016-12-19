<?php

namespace chainy;

class Ltrim extends BaseTrim
{
    public function __invoke(string $value)
    {
        return ltrim($value, $this->chars);
    }
}