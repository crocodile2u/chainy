<?php

namespace chainy;

class Substr
{
    /**
     * @var int
     */
    private $start, $length;

    /**
     * Substr constructor.
     * @param int $start
     * @param int $length
     */
    public function __construct(int $start, $length = null)
    {
        $this->start = $start;
        $this->length = $length;
    }

    function __invoke($value)
    {
        return mb_substr($value, $this->start, $this->length);
    }
}