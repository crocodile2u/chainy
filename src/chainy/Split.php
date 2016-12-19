<?php

namespace chainy;

class Split
{
    private $delimiter;
    public function __construct(string $delimiter)
    {
        $this->delimiter = $delimiter;
    }

    public function __invoke(string $value)
    {
        return explode($this->delimiter, $value);
    }
}