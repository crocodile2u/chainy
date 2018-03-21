<?php

namespace chainy;

class Unique
{
    private $sortFlags;
    /**
     * Unique constructor.
     * @param int $sortFlags
     */
    public function __construct($sortFlags = SORT_STRING)
    {
        $this->sortFlags = $sortFlags;
    }

    public function __invoke(array $value)
    {
        return array_unique($value, $this->sortFlags);
    }
}
