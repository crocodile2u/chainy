<?php

namespace chainy;

class Splice
{
    /**
     * @var int
     */
    private $offset;

    /**
     * @var int
     */
    private $length;
    /**
     * @var bool
     */
    private $replacement;

    /**
     * Map constructor.
     * @param int $offset
     */
    public function __construct($offset, $length = null, $replacement = null)
    {
        $this->offset = $offset;
        $this->length = $length;
        $this->replacement = $replacement;
    }

    public function __invoke(array &$value)
    {
        return array_splice($value, $this->offset, $this->length, $this->replacement);
    }
}