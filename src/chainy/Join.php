<?php

namespace chainy;

class Join
{
    private $glue;
    public function __construct(string $glue = "")
    {
        $this->glue = $glue;
    }

    public function __invoke(array $value)
    {
        return join($this->glue, $value);
    }
}
