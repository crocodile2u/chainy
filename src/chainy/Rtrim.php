<?php

namespace chainy;

class Rtrim extends BaseTrim
{
    public function __invoke(string $value)
    {
        return rtrim($value, $this->chars);
    }
}