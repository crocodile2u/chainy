<?php

namespace chainy;

class Ksort
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
        ksort($value, $this->sortFlags);
        return $value;
    }
}