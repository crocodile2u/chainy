<?php

namespace chainy;

class Sort
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
        sort($value, $this->sortFlags);
        return $value;
    }
}