<?php

namespace chainy;

class StripTags
{
    protected $allowed;

    public function __construct($allowed = null)
    {
        $this->allowed = $allowed;
    }

    public function __invoke(string $value)
    {
        return strip_tags($value, $this->allowed);
    }
}